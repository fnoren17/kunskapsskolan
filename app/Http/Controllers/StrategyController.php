<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StrategyController extends Controller{

	// Get strategies currently in logbook
	function currentStrategies(Request $request, $subject) {

			$user = 1;
			//$subject = "Engelska";

			$result = DB::select("SELECT id, title, block FROM (
			SELECT title, subject_id FROM ks_user_strategies JOIN ks_strategies ON ks_user_strategies.strategy_id = ks_strategies.id WHERE user_id = ? ORDER BY title ASC
			) AS strats JOIN ks_subjects ON strats.subject_id = ks_subjects.id
			WHERE subject = ? ", [$user, $subject]);

			return json_encode(array('strategies'=>$result));
		}

	// The algorithm for suggesting new strategies
	function regularStrategies(Request $request, $subject, $step){

		$strats = DB::select("SELECT DISTINCT(title) FROM (SELECT * FROM ks_strategies_tags WHERE tag IN (SELECT tag
									FROM
										ks_subjects_tags
									WHERE
										subject_id = (
										SELECT 
											id
										FROM
											ks_subjects
										WHERE
											block = ? AND subject = ?
										)
									)
								) AS distinct_ids
							    JOIN(
							    SELECT *
								FROM ks_strategies
								) AS distinct_strategies
							ORDER BY title ASC
							LIMIT 0, 5", [$step,$subject]);

		return json_encode(array('strategies'=>$strats));
	}

	/*
	function bookmarkedStrategies(Request $request, $subject){
		$strats = array(array('title' => $subject."1 Step", "id" => 3),array("title" => $subject."2 Step", "id" => 4));
		return json_encode(array('strategies'=>$strats));
	}
	*/

	function getBookmarkedStrategies(Request $request, $user_id){
		$result = DB::select("SELECT title FROM ks_strategies JOIN ks_user_bookmarks ON ks_strategies.id = ks_user_bookmarks.strategy_id WHERE user_id = ?", [$user_id]);
		return json_encode(array('strategies'=>$result));
	}

	function saveStrategies(Request $request, $subject, $step){

		$data = $request->json()->all();
		$strategies = $data['strategies'];

		$user = 1;

		foreach($strategies as $strategy) {
			$result =	DB::insert("INSERT INTO ks_user_strategies (user_id, strategy_id, subject_id) VALUES
				(?, (SELECT id FROM ks_strategies WHERE title = ?),(SELECT id FROM ks_subjects WHERE subject = ? AND block = ?));", [$user, $strategy, $subject, $step]);
		}
		return json_encode($result);
	}

	function strategyDescription(Request $request, $title){

		$result = DB::select("SELECT title, description FROM ks_strategies WHERE title = ?", [$title]);
		return json_encode(array('text'=>$result));
	}

	function storeBookmarkedStrategy(Request $request, $title, $user_id){
		$user =1;

		DB::insert("INSERT INTO ks_user_bookmarks (user_id, strategy_id) VALUES
		(?, (SELECT id FROM ks_strategies WHERE title = ?));", [$user, $title]);
		return json_encode('success');
	}

	function getUserHistoricalStrategies(Request $request, $user_id){
		$result = DB::select("SELECT DISTINCT(title) FROM ks_ratings JOIN ks_strategies ON ks_ratings.strategy_id = ks_strategies.id WHERE user_id = ?", [$user_id]);
		return json_encode(array('strategies'=>$result));
	}
}

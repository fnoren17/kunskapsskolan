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

	function allStrategies(Request $request) {
		$user = 1;
		$result = DB::select("SELECT id, title, block, subject FROM (
		SELECT title, subject_id FROM ks_user_strategies JOIN ks_strategies ON ks_user_strategies.strategy_id = ks_strategies.id WHERE user_id = ? ORDER BY title ASC
		) AS strats JOIN ks_subjects ON strats.subject_id = ks_subjects.id", [$user]);
		return json_encode(array('strategies'=>$result));
	}

	// The algorithm for suggesting new strategies
	function regularStrategies(Request $request, $subject, $step){
		$strats = DB::select("
			SELECT
			    strategy_id, title, rating_score
			FROM
			    (SELECT
			        strategy_id,
			            (10 * block_score + 1 * subject_score) AS rating_score
			    FROM
			        (SELECT
			        distinct_ids.strategy_id,
			            score AS block_score,
			            0 AS subject_score
			    FROM
			        (SELECT
			        strategy_id
			    FROM
			        ks_strategies_tags
			    WHERE
			        tag IN (SELECT
			                tag
			            FROM
			                ks_subjects_tags
			            WHERE
			                subject_id = (SELECT
			                        id
			                    FROM
			                        ks_subjects
			                    WHERE
			                        block = ? AND subject = ?))
			    GROUP BY strategy_id) AS distinct_ids
			    JOIN (SELECT
			        SUM(rating) AS score, strategy_id
			    FROM
			        ks_ratings
			    WHERE
			        subject_id = (SELECT
			                id
			            FROM
			                ks_subjects
			            WHERE
			                block = ? AND subject = ?)
			    GROUP BY strategy_id) AS elegible_ratings ON distinct_ids.strategy_id = elegible_ratings.strategy_id UNION ALL SELECT
			        distinct_ids2.strategy_id,
			            0 AS block_score,
			            score AS subject_score
			    FROM
			        (SELECT
			        strategy_id
			    FROM
			        ks_strategies_tags
			    WHERE
			        tag IN (SELECT
			                tag
			            FROM
			                ks_subjects_tags
			            WHERE
			                subject_id IN (SELECT
			                        id
			                    FROM
			                        ks_subjects
			                    WHERE
			                        subject = ?))
			    GROUP BY strategy_id) AS distinct_ids2
			    JOIN (SELECT
			        SUM(rating) AS score, strategy_id
			    FROM
			        ks_ratings
			    WHEREspara ner strategier i ks_ratings
			        subject_id IN (SELECT
			                id
			            FROM
			                ks_subjects
			            WHERE
			                subject = ?)
			    GROUP BY strategy_id) AS elegible_ratings2 ON distinct_ids2.strategy_id = elegible_ratings2.strategy_id) AS overall
			    ORDER BY rating_score DESC
			    LIMIT 0 , 5) AS strategy_scores
			        JOIN
			    ks_strategies ON strategy_scores.strategy_id = ks_strategies.id
		", [$step,$subject,$step,$subject,$subject,$subject]);
		return json_encode(array('strategies'=>$strats));
	}

	function evaluateStrategies(Request $request) {
		$user = 1;
		$data = $request->json()->all();
		$strategies = $data['strategies'];
		foreach($strategies as $strategy) {
			$rating = $strategy['rating'];
			$subject = $strategy['subject'];
			$step = $strategy['block'];
			$strategy_id = $strategy['id'];
			$result =	DB::insert("INSERT INTO ks_ratings (rating, user_id, strategy_id, subject_id) VALUES
				(?, ?, ?, (SELECT id FROM ks_subjects WHERE subject = ? AND block = ?));", [$rating, $user, $strategy_id, $subject, $step]);
			$result =	DB::delete("DELETE FROM ks_user_strategies WHERE user_id = ? AND strategy_id = ? AND subject_id = (SELECT id FROM ks_subjects WHERE subject = ? AND block = ?)));", [$user, $strategy_id, $subject, $step]);
			#spara ner strategier i ks_ratings
			#ta bort strategierna ur aktuella strategier
		}

		return json_encode($result);
	}

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

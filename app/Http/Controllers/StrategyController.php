<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StrategyController extends Controller
{

	function currentStrategies(Request $request, $subject) {


			$user = 1;
			$subject = "Engelska";


			$result = DB::select("SELECT id, title, block FROM (
			SELECT title, subject_id FROM ks_user_strategies JOIN ks_strategies ON ks_user_strategies.strategy_id = ks_strategies.id WHERE user_id = ? ORDER BY title ASC
			) AS strats JOIN ks_subjects ON strats.subject_id = ks_subjects.id
			WHERE subject = ? ", [$user, $subject]);


			return json_encode(array('strategies'=>$result));
		}

		//Algoritmen
	function regularStrategies(Request $request, $subject, $step){


		$strats = array(array('title' => "Att ge kamratrespons", "id" => 1),array("title" => "Belöningar", "id" => 2));

		return json_encode(array('strategies'=>$strats));
	}


	function bookmarkedStrategies(Request $request, $subject){

		$strats = array(array('title' => $subject."1 Step", "id" => 3),array("title" => $subject."2 Step", "id" => 4));


		return json_encode(array('strategies'=>$strats));
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

}

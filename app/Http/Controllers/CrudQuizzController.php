<?php




namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;



class CrudQuizzController extends Controller{


    public function createQuizz(Request $request){
 
      $validatedData = $request->validate(["question" => "required"]);
      $question = $validatedData["question"];
      DB::insert("INSERT INTO questions (content_question) VALUES (:content_question)", ["content_question" => $question]); 

      $validatedDataRight = $request->validate(["right_asw" => "required"]);
       $rightAnswer = $validatedDataRight["right_asw"];
       DB::insert("INSERT INTO right_answer (content_right_answer) VALUES (:content_right_answer)", ["content_right_answer" => $rightAnswer]);

       $validatedDataWrong = $request->validate(["wrong_asw" => "required"]);
       $wrongAnswer = $validatedDataWrong["wrong_asw"];
       DB::insert("INSERT INTO wrong_answer (content_wrong_answer)  VALUES (:content_wrong_answer)", ["content_wrong_answer" => $wrongAnswer]); 

      return view('crudQuizz');
    }


    public function readQuizz(){


   //voir pour une syntaxe plutot sous forme objet
  
   $questionsToShow = DB::select("SELECT id, content_question FROM questions");
   $rightAnswersToShow = DB::select("SELECT content_right_answer FROM right_answer LEFT JOIN questions ON right_answer.id = questions.right_answer_id");
   $wrongAnswersToShow = DB::select("SELECT content_wrong_answer FROM wrong_answer LEFT JOIN questions ON wrong_answer.id = questions.wrong_answer_id");
   return view('crudQuizz', ["questionsToShow" => $questionsToShow, "rightAnswersToShow"=> $rightAnswersToShow, "wrongAnswersToShow"=>$wrongAnswersToShow]);
  // return view('crudQuizz', ["questionsToShow"=>$questionsToShow]);
  // var_dump($questionsToShow);
    }

//     public function updateQuizz(Request $request){  
   
//     }

//     //méthode POST avec input caché
//     public function deleteQuizz(Request $request){
//   }
     
}


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

      return redirect('crudQuizz');
    }


    public function readQuizz(){
  
   $questionsToShow = DB::select("SELECT id, content_question FROM questions");
   $rightAnswersToShow = DB::select("SELECT questions.id, content_right_answer FROM right_answer LEFT JOIN questions ON right_answer.id = questions.right_answer_id");
   $wrongAnswersToShow = DB::select("SELECT questions.id, content_wrong_answer FROM wrong_answer LEFT JOIN questions ON wrong_answer.id = questions.wrong_answer_id");
   return view('crudQuizz', ["questionsToShow" =>  $questionsToShow , "rightAnswersToShow"=> $rightAnswersToShow, "wrongAnswersToShow"=>$wrongAnswersToShow]);

    }

    public function updateQuizz(Request $request){  

      $validatedData = $request->validate(["modify_question_content" => "required"]);
      $modif = $validatedData['modify_question_content'];
      $toModify = $request -> input('to_modify');
      DB::update("UPDATE questions SET content_question = :content_question WHERE id = :id", ["content_question"=> $modif, "id"=> $toModify]);


      $validatedData = $request->validate(["modify_right_answer_content" => "required"]);
      $modif = $validatedData['modify_right_answer_content'];
      $toModify = $request -> input('to_modify');
      DB::update("UPDATE right_answer SET content_right_answer = :content_right_answer WHERE id = :id", ["content_right_answer"=> $modif, "id"=> $toModify]);

      $validatedData = $request->validate(["modify_wrong_answer_content" => "required"]);
      $modif = $validatedData['modify_wrong_answer_content'];
      $toModify = $request -> input('to_modify');
      DB::update("UPDATE wrong_answer SET content_wrong_answer = :content_wrong_answer WHERE id = :id", ["content_wrong_answer"=> $modif, "id"=> $toModify]);


      return redirect('crudQuizz');

    }

    public function deleteQuizz(Request $request){
      $toDelete = $request->input('remove_quizz_index');
      DB::delete("DELETE FROM questions WHERE id = :id",["id"=> $toDelete]);
      DB::delete("DELETE FROM right_answer WHERE id = :id",["id"=> $toDelete]);
      DB::delete("DELETE FROM wrong_answer WHERE id = :id",["id"=> $toDelete]);

      return redirect('crudQuizz');

  }
     
}


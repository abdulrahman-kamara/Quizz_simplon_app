<div id="container-quizz-to-fill">
    
    
        <form action="/fill-quizz" method="POST">
        @csrf 
              <label for="question">Question : </label>  <input type="text" name="question" class="input-quizz input-quizz-question" />
            
             <label for="vraie-answer">Réponse correcte : </label>  <input type="text" name="right_asw" class="input-quizz input-quizz-answer" />
        
             <label for="fausse-answer">Réponse fausse : </label>  <input type="text" name="wrong_asw" class="input-quizz input-quizz-answer" /> 
           
             <input type="submit" value="envoyer"/>
        </form>
       

</div>

<div id="container-show-quizz">
  

        <ul class="listQuizzResults"  >

          @foreach ($questionsToShow as $quest)
                <li class="left" >{{ $quest->content_question }}</li>
            @endforeach

            @foreach ($rightAnswersToShow as $right)
                <li class="middle" >{{ $right->content_right_answer }}</li>
            @endforeach

            @foreach ($wrongAnswersToShow  as $wrong)
                <li class="right" >{{ $wrong->content_wrong_answer }}</li>
            @endforeach
         
            </ul>

       
</div>


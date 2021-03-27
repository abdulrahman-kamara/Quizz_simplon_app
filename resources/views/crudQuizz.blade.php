




<div id="container-quizz-to-fill">
    
    
        <form action="/fill-quizz" method="POST">
        @csrf 
              <label for="question">Question : </label>  <input type="text" required aria-required="true" autocomplete="off" name="question" class="input-quizz input-quizz-question" />
            
             <label for="vraie-answer">Réponse correcte : </label>  <input type="text" required aria-required="true" autocomplete="off" name="right_asw" class="input-quizz input-quizz-answer" />
        
             <label for="fausse-answer">Réponse fausse : </label>  <input type="text" required aria-required="true" autocomplete="off" name="wrong_asw" class="input-quizz input-quizz-answer" /> 
           
             <input type="submit" value="envoyer"/>
        </form>
       

</div>

<div id="container-show-quizz" >
  

        <ul class="listQuizzResults" style="width:100vw;display:grid;grid-template-columns: 1fr 1fr 1fr;" >

          @foreach ($questionsToShow  as $quest)
                <li class="left" style="grid-column: 1/2;">Question : {{ $quest->content_question }}
                     <form method="POST" action='modify_quizz'>
                        <input name="to_modify" value="{{$quest->id}}" type="hidden" />
                         <input name="modify_question_content" type="text" />
                @csrf
                            <button>modifier</button>
                     </form>
                     <form method="post" action='remove_quizz_id'>
                         <input name="remove_quizz_index" value="{{$quest->id}}" type="hidden" />
                  @csrf
                          <button type='submit' > x</button>
                     </form>                     
                </li>
                
            @endforeach

            @foreach ($rightAnswersToShow as $right)
                <li class="middle" style="grid-column: 2/3;" >Réponse juste : {{ $right->content_right_answer }}
                  <form method="POST" action='modify_quizz'>
                        <input name="to_modify" value="{{$right->id}}" type="hidden" />
                         <input name="modify_right_answer_content" type="text" />
                @csrf
                            <button>modifier</button>
                     </form>
                     <form method="post" action='remove_quizz_id'>
                         <input name="remove_quizz_index" value="{{$right->id}}" type="hidden" />
                  @csrf
                          <button type='submit' > x</button>
                     </form>
                 </li>
            @endforeach

            @foreach ($wrongAnswersToShow  as $wrong)
                <li class="right" style="grid-column: 3/4;" >Réponse fausse : {{ $wrong->content_wrong_answer }}
                   <form method="POST" action='modify_quizz'>
                        <input name="to_modify" value="{{$wrong->id}}" type="hidden" />
                         <input name="modify_wrong_answer_content" type="text" />
                @csrf
                            <button>modifier</button>
                     </form>
                     <form method="post" action='remove_quizz_id'>
                         <input name="remove_quizz_index" value="{{$wrong->id}}" type="hidden" />
                  @csrf
                          <button type='submit' > x</button>
                     </form>
                </li>
            @endforeach
         
            </ul>

       
</div>

<!-- definir variable -->
$(document).ready(function(){

    var FirstParaAlreadyReaded = false;

    var FirstParaReading = false;
    var FirstParaPaused = false;
    var FirstParaInitial = true;

    var SecondParaReading = false;
    var SecondParaPaused = false;
    var SecondParaInitial = true;

    $(".inside-container p").click(function(){

    if(FirstParaAlreadyReaded == false){

        if (FirstParaInitial == true) {
            $(this).articulate('speak');
            FirstParaReading = true;
            FirstParaInitial= false;
        }
        else if (FirstParaReading == true){
            $(this).articulate('pause');
            FirstParaPaused = true;
            FirstParaReading = false;
        }
        else if (FirstParaPaused == true){
            $(this).articulate('resume');
            FirstParaReading = true;
            FirstParaPaused = false;
        }

    }else{

        if (SecondParaInitial == true) {
            $(this).articulate('speak');
            SecondParaReading = true;
            SecondParaInitial= false;
        }
        else if (SecondParaReading == true){
            $(this).articulate('pause');
            SecondParaPaused = true;
            SecondParaReading = false;
        }
        else if (SecondParaPaused == true){
            $(this).articulate('resume');
            SecondParaReading = true;
            SecondParaPaused = false;
        }

    }

     });

});
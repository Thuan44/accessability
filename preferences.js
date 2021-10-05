$(document).ready(function(){
    
    // Définit la taille de la police du texte selon le bouton cliqué
    $('button[name="FontSize"]').click(function(){

       var taillepolice = $(this).val();

      switch (taillepolice) {
        case "Small":
            $("p").css('font-size', 16);
            break;
        case "Medium":
            $("p").css('font-size', 22);
            break;
        case "Large":
            $("p").css('font-size', 27);
            break;
        case "ExtraLarge":
            $("p").css('font-size', 32);
            break;
    }
    });

    // Définit la coueleur de fond du texte selon le bouton cliqué
    $('button[name="BackgroundColor"]').click(function(){

        var couleurfond = $(this).val();
        
       switch (couleurfond) {
         case "Black":
             $("p").css('background-color', "black");
             break;
         case "White":
             $("p").css('background-color', "white");
             break;
         case "Send":
             $("p").css('background-color', "#ffcc99");
             break;
         }
    });

// Définit le type de police selon le bouton cliqué
    $('button[name="FontName"]').click(function(){

        var typepolice = $(this).val();
        
       switch (typepolice) {
         case "Arial":
             // Calisto MT
             $("p").css('font-family', "arial");
             break;
         case "Luciole":
             $("p").css({ 'fontFamily' : "Kimberley",
             'src': url("\src\Font\Luciole")});
             break;
         case "Normale":
             $("p").css('font-family', "");
             break;
         }
    });

    // Définit la coueleur de la police selon le bouton cliqué
    $('button[name="FontColor"]').click(function(){

        var couleurpolice = $(this).val();
        
        switch (couleurpolice) {
        case "White":
            $("p").css('color', "white");
            break;
        case "Black":
            $("p").css('color', "black");
            break;
        case "Yellow":
            $("p").css('color', "yellow");
            break;
        case "Beige":
            $("p").css('color', "#ffcc99");
            break;
        }
    });

    // Définit l'interligne selon le bouton cliqué
    $('button[name="LineHeight"]').click(function(){

        var interligne = $(this).val();
        
        switch (interligne) {
        case "White":
            $("p").css('color', "white");
            break;
        case "Black":
            $("p").css('color', "black");
            break;
        case "Yellow":
            $("p").css('color', "yellow");
            break;
        case "Beige":
            $("p").css('color', "#ffcc99");
            break;
        }
    });

  });
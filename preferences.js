$(document).ready(function(){
    
    // Définit la taille de la police du texte selon le bouton cliqué
    // Impact la taille de police des exemples du daltonisme
    $('input[type=radio][name="FontSize"]').change(function(){
       var taillepolice = $(this).val();

      switch (taillepolice) {
        case "16":
            $("#text-demo").css('font-size', 16);
            $(".DemoError").css('font-size', 16);
             $(".FirstColor").css('font-size', 16);
             $(".DemoButton").css('font-size', 16);
            break;
        case "20":
            $("#text-demo").css('font-size', 20);
            $(".DemoError").css('font-size', 20);
             $(".FirstColor").css('font-size', 20);
             $(".DemoButton").css('font-size', 20);
            break;
        case "24":
            $("#text-demo").css('font-size', 24);
            $(".DemoError").css('font-size', 24);
             $(".FirstColor").css('font-size', 24);
             $(".DemoButton").css('font-size', 24);
            break;
        case "28":
            $("#text-demo").css('font-size', 28);
            $(".DemoError").css('font-size', 28);
             $(".FirstColor").css('font-size', 28);
             $(".DemoButton").css('font-size', 28);
            break;
    }
    });

    // Définit la coueleur de fond du texte selon le bouton cliqué
    // Impact la couleur de fond des exemples du daltonisme
    $('button[name="BackgroundColor"]').click(function(){

        var couleurfond = $(this).val();
        
       switch (couleurfond) {
         case "Black":
             $("p").css('background-color', "black");
             $(".DemoError").css('background-color', "black");
             $(".FirstColor").css("background-color", "black");
             break;
         case "White":
             $("p").css('background-color', "white");
             $(".DemoError").css('background-color', "white");
             $(".FirstColor").css("background-color", "white");
             break;
         case "Send":
             $("p").css('background-color', "#ffcc99");
             $(".DemoError").css('background-color', "#ffcc99");
             $(".FirstColor").css("background-color", "#ffcc99");
             break;
         }
    });

// Définit le type de police selon le bouton cliqué
    $('button[name="FontName"]').click(function(){

        var typepolice = $(this).val();
        
       switch (typepolice) {
         case "Arial":
             $("p").css('font-family', "arial");
             break;
         case "Luciole":
            $("p").css('font-family', "lucioleregular");
             break;
         case "Normale":
             $("p").css('font-family', "");
             break;
         }
    });

    // Définit la coueleur de la police selon le bouton cliqué
    // Impact la couleur de police des exemples du daltonisme
    $('button[name="FontColor"]').click(function(){

        var couleurpolice = $(this).val();
        
        switch (couleurpolice) {
        case "White":
            $("p").css('color', "white");
            $(".DemoError").css('color', "white");
            break;
        case "Black":
            $("p").css('color', "black");
            $(".DemoError").css('color', "black");
            break;
        case "Yellow":
            $("p").css('color', "yellow");
            $(".DemoError").css('color', "yellow");
            break;
        case "Beige":
            $("p").css('color', "#ffcc99");
            $(".DemoError").css('color', "#ffcc99");
            break;
        }
    });

    // Définit l'interligne selon le bouton cliqué
    $('button[name="LineHeight"]').click(function(){

        var interligne = $(this).val();

        switch (interligne) {
        case "Small":
            $("p").css("line-height", "115%");
            break;
        case "Medium":
            $("p").css("line-height", "165%");
            break;
        case "Large":
            $("p").css("line-height", "215%");
            break;
        }
    });

        // Définit la première couleur de mise en évidence selon le bouton cliqué
        $('button[name="FirstHighlightColor"]').click(function(){

            var premierecouleur = $(this).val();

            switch (premierecouleur) {
            case "Red":
                $(".FirstColor").css("color", "Red");
                break;
            case "Yellow":
                $(".FirstColor").css("color", "Yellow");
                break;
            case "Green":
                $(".FirstColor").css("color", "Green");
                break;
            case "Cyan":
                $(".FirstColor").css("color", "Cyan");
                break;
            case "Blue":
                $(".FirstColor").css("color", "Blue");
                break;
            case "Purple":
                $(".FirstColor").css("color", "Purple");
                break;
            }
        });

        // Définit la deuxième couleur de mise en évidence selon le bouton cliqué
        $('button[name="SecondHighlightColor"]').click(function(){

            var deuxiemecouleur = $(this).val();
            $(".DemoButton").css("color", "white");

            switch (deuxiemecouleur) {
            case "Red":
                $(".DemoButton").css("background-color", "Red");
                break;
            case "Yellow":
                $(".DemoButton").css("background-color", "Yellow");
                break;
            case "Green":
                $(".DemoButton").css("background-color", "Green");
                break;
            case "Cyan":
                $(".DemoButton").css("background-color", "Cyan");
                break;
            case "Blue":
                $(".DemoButton").css("background-color", "Blue");
                break;
            case "Purple":
                $(".DemoButton").css("background-color", "Purple");
                break;
            }
        });

        // Définit la troisième couleur de mise en évidence selon le bouton cliqué
        $('button[name="ThirdHighlightColor"]').click(function(){

            var troisiemecouleur = $(this).val();

            switch (troisiemecouleur) {
            case "Red":
                $(".DemoError").css("text-decoration", "Red wavy underline");
                break;
            case "Yellow":
                $(".DemoError").css("text-decoration", "Yellow wavy underline");
                break;
            case "Green":
                $(".DemoError").css("text-decoration", "Green wavy underline");
                break;
            case "Cyan":
                $(".DemoError").css("text-decoration", "Cyan wavy underline");
                break;
            case "Blue":
                $(".DemoError").css("text-decoration", "Blue wavy underline");
                break;
            case "Purple":
                $(".DemoError").css("text-decoration", "Purple wavy underline");
                break;
            }
        });

  });
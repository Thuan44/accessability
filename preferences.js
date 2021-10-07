$(document).ready(function () {

    // Définit la taille de la police du texte selon le bouton cliqué
    // Impact la taille de police des exemples du daltonisme
    $('input[name="FontSize"]').click(function () {

        var taillepolice = $(this).val();

        switch (taillepolice) {
            case "16":
                //$("label").css('font-size', 16);
                //$("p").css('font-size', 16);
                $(".ExemplePreferences").css('font-size', 16);
                $(".DemoError").css('font-size', 16);
                $(".FirstColor").css('font-size', 16);
                $(".DemoButton").css('font-size', 16);
                break;
            case "22":
                //$("label").css('font-size', 22);
                //$("p").css('font-size', 22);
                $(".ExemplePreferences").css('font-size', 22);
                $(".DemoError").css('font-size', 22);
                $(".FirstColor").css('font-size', 22);
                $(".DemoButton").css('font-size', 22);
                break;
            case "27":
                //$("label").css('font-size', 27);
                //$("p").css('font-size', 27);
                $(".ExemplePreferences").css('font-size', 27);
                $(".DemoError").css('font-size', 27);
                $(".FirstColor").css('font-size', 27);
                $(".DemoButton").css('font-size', 27);
                break;
            case "32":
                //$("label").css('font-size', 32);
                //$("p").css('font-size', 32);
                $(".ExemplePreferences").css('font-size', 32);
                $(".DemoError").css('font-size', 32);
                $(".FirstColor").css('font-size', 32);
                $(".DemoButton").css('font-size', 32);
                break;
        }
    });

    // Définit la coueleur de fond du texte selon le bouton cliqué
    // Impact la couleur de fond des exemples du daltonisme
    $('input[name="BackgroundColor"]').click(function () {

        var couleurfond = $(this).val();

        switch (couleurfond) {
            case "#000000":
                //$("p").css('background-color', "black");
                $(".ExemplePreferences").css('background-color', "black");
                $(".DemoError").css('background-color', "black");
                $(".FirstColor").css("background-color", "black");
                break;
            case "#ffffff":
                //$("p").css('background-color', "white");
                $(".ExemplePreferences").css('background-color', "white");
                $(".DemoError").css('background-color', "white");
                $(".FirstColor").css("background-color", "white");
                break;
            case "#ffcc99":
                //$("p").css('background-color', "#ffcc99");
                $(".ExemplePreferences").css('background-color', "#ffcc99");
                $(".DemoError").css('background-color', "#ffcc99");
                $(".FirstColor").css("background-color", "#ffcc99");
                break;
        }
    });

    // Définit le type de police selon le bouton cliqué
    $('input[name="FontName"]').click(function () {

        var typepolice = $(this).val();

        switch (typepolice) {
            case "Arial":
                $(".ExemplePreferences").css('font-family', "arial");
                //$("p").css('font-family', "arial");
                break;
            case "Luciole":
                $(".ExemplePreferences").css('font-family', "lucioleregular");
                //$("p").css('font-family', "lucioleregular");
                break;
            case "Normale":
                $(".ExemplePreferences").css('font-family', "");
                $("p").css('font-family', "");
                break;
        }
    });

    // Définit la coueleur de la police selon le bouton cliqué
    // Impact la couleur de police des exemples du daltonisme
    $('input[name="FontColor"]').click(function () {

        var couleurpolice = $(this).val();

        switch (couleurpolice) {
            case "#ffffff":
                //$("p").css('color', "white");
                $(".ExemplePreferences").css('color', "white");
                $(".DemoError").css('color', "white");
                break;
            case "#000000":
                //$("p").css('color', "black");
                $(".ExemplePreferences").css('color', "black");
                $(".DemoError").css('color', "black");
                break;
            case "#ffff00":
                //$("p").css('color', "yellow");
                $(".ExemplePreferences").css('color', "yellow");
                $(".DemoError").css('color', "yellow");
                break;
            case "#ffcc99":
                //$("p").css('color', "#ffcc99");
                $(".ExemplePreferences").css('color', "#ffcc99");
                $(".DemoError").css('color', "#ffcc99");
                break;
        }
    });

    // Définit l'interligne selon le bouton cliqué
    $('input[name="LineHeight"]').click(function () {

        var interligne = $(this).val();

        switch (interligne) {
            case "115":
                //$("p").css("line-height", "115%");
                $(".ExemplePreferences").css("line-height", "115%");
                break;
            case "165":
                //$("p").css("line-height", "165%");
                $(".ExemplePreferences").css("line-height", "165%");
                break;
            case "215":
                //$("p").css("line-height", "215%");
                $(".ExemplePreferences").css("line-height", "215%");
                break;
        }
    });

    // Définit la première couleur de mise en évidence selon le bouton cliqué
    $('input[name="FirstHighlightColor"]').click(function () {

        var premierecouleur = $(this).val();

        switch (premierecouleur) {
            case "#ff0000":
                $(".FirstColor").css("color", "Red");
                break;
            case "#ffff00":
                $(".FirstColor").css("color", "Yellow");
                break;
            case "#008000":
                $(".FirstColor").css("color", "Green");
                break;
            case "#00FFFF":
                $(".FirstColor").css("color", "Cyan");
                break;
            case "#0000FF":
                $(".FirstColor").css("color", "Blue");
                break;
            case "#800080":
                $(".FirstColor").css("color", "Purple");
                break;
        }
    });

    // Définit la deuxième couleur de mise en évidence selon le bouton cliqué
    $('input[name="SecondHighlightColor"]').click(function () {

        var deuxiemecouleur = $(this).val();
        $(".Demoinput").css("color", "white");

        switch (deuxiemecouleur) {
            case "#ff0000":
                $(".Demoinput").css("background-color", "Red");
                break;
            case "#ffff00":
                $(".Demoinput").css("background-color", "Yellow");
                break;
            case "#008000":
                $(".Demoinput").css("background-color", "Green");
                break;
            case "#00FFFF":
                $(".Demoinput").css("background-color", "Cyan");
                break;
            case "#0000FF":
                $(".Demoinput").css("background-color", "Blue");
                break;
            case "#800080":
                $(".Demoinput").css("background-color", "Purple");
                break;
        }
    });

    // Définit la troisième couleur de mise en évidence selon le bouton cliqué
    $('input[name="ThirdHighlightColor"]').click(function () {

        var troisiemecouleur = $(this).val();

        switch (troisiemecouleur) {
            case "#ff0000":
                $(".DemoError").css("text-decoration", "Red wavy underline");
                break;
            case "#ffff00":
                $(".DemoError").css("text-decoration", "Yellow wavy underline");
                break;
            case "#008000":
                $(".DemoError").css("text-decoration", "Green wavy underline");
                break;
            case "#00FFFF":
                $(".DemoError").css("text-decoration", "Cyan wavy underline");
                break;
            case "#0000FF":
                $(".DemoError").css("text-decoration", "Blue wavy underline");
                break;
            case "#800080":
                $(".DemoError").css("text-decoration", "Purple wavy underline");
                break;
        }
    });

});
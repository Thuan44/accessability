<?php include_once 'header.php' ?>


<?php
    if(isset($_POST['submit_update_db'])){
      if(!empty($_POST['FontName']) && !empty($_POST['FontSize'])
       && !empty($_POST['BackgroundColor']) && !empty($_POST['FontColor'])
       && !empty($_POST['FirstHighlightColor']) && !empty($_POST['SecondHighlightColor']) 
       && !empty($_POST['ThirdHighlightColor']) && !empty($_POST['LineHeight'])) {

        $fontname = $_POST['FontName'];
        $fontsize = $_POST['FontSize'];
        $bgcolor = $_POST['BackgroundColor'];
        $fontcolor = $_POST['FontColor'];
        $eltcolor1 = $_POST['FirstHighlightColor'];
        $eltcolor2 = $_POST['SecondHighlightColor'];
        $eltcolor3 = $_POST['ThirdHighlightColor'];
        $linespace = $_POST['LineHeight'];

      } else {
          echo 'Veuillez remplir tous les champs';
      }
      updateDB($fontname, $fontsize, $fontcolor, $eltcolor1, $eltcolor2, $eltcolor3, $bgcolor, $linespace);
    }
?>

<?php 
    global $connection;
    $user_id = $_SESSION['user_id'];
    //Fontfamily
    $query = "SELECT user_fontfamily FROM users WHERE user_id = '".$user_id."'";
    $result = $connection->query($query);
    $fontname_array = $result->fetch();
    $fontname_radio = $fontname_array[0]; 
    //Fontsize
    $query = "SELECT user_fontsize FROM users WHERE user_id = '".$user_id."'";
    $result = $connection->query($query);
    $fontsize_array = $result->fetch();
    $fontsize_radio = $fontsize_array[0];
    //LineHeight
    $query = "SELECT user_linespace FROM users WHERE user_id = '".$user_id."'";
    $result = $connection->query($query);
    $linespace_array = $result->fetch();
    $linespace_radio = $linespace_array[0];
    //BackgroundColor
    $query = "SELECT user_bgcolor FROM users WHERE user_id = '".$user_id."'";
    $result = $connection->query($query);
    $bgcolor_array = $result->fetch();
    $bgcolor_radio = $bgcolor_array[0];
    //FontColor
    $query = "SELECT user_fontcolor FROM users WHERE user_id = '".$user_id."'";
    $result = $connection->query($query);
    $fontcolor_array = $result->fetch();
    $fontcolor_radio = $fontcolor_array[0];
    //Element1Color
    $query = "SELECT user_eltcolor_1 FROM users WHERE user_id = '".$user_id."'";
    $result = $connection->query($query);
    $elt1color_array = $result->fetch();
    $elt1color_radio = $elt1color_array[0];
    //Element2Color
    $query = "SELECT user_eltcolor_2 FROM users WHERE user_id = '".$user_id."'";
    $result = $connection->query($query);
    $elt2color_array = $result->fetch();
    $elt2color_radio = $elt2color_array[0];
    //Element3Color
    $query = "SELECT user_eltcolor_3 FROM users WHERE user_id = '".$user_id."'";
    $result = $connection->query($query);
    $elt3color_array = $result->fetch();
    $elt3color_radio = $elt3color_array[0];
?>
<div id="pref" class="container-fluid">
    <div class="row">
        <div class="col-md-2" style="background-color:#271549;">

            <div class="mt-2">
                <h1 style="font-size: 28px; color:#ffffff"> PRÉFÈRENCES </h1>
                <?php if(isset($_SESSION)){
                    echo "<div style=\"position:fixed; bottom: 30px;\"><span style=\"font-size: 20px; color:#ffffff\"> ← Retour au cours</span></div>";
                }else {
                    echo "<div style=\"position:fixed; bottom: 30px;\"><span style=\"font-size: 20px; color:#ffffff\"> ← Retour </span></div>";
                } ?>
            </div>
        </div>
        <div class="col-md-8">
            <div class="preferencestexte px-3 py-3">

                <p style="font-size: 28px; font-weight: bold; color:#271549">Configurez vos préférences visuelles afin
                    de faciliter la lecture des cours</p>

                <form method="post" action="">
                    <label style="font-weight: bold; color:#271549" for="FontName">Choisissez une police :</label>

                    <p><input class="form-check-input" name="FontName" type="radio" value="Normale"
                            <?php echo ($fontname_radio=='Normale')?'checked':'' ?>>
                        Normale</input>
                        <input class="form-check-input" name="FontName" type="radio" value="Luciole"
                            <?php echo ($fontname_radio=='Luciole')?'checked':'' ?>> Luciole</input>
                        <input class="form-check-input" name="FontName" type="radio" value="Arial"
                            <?php echo ($fontname_radio=='Arial')?'checked':'' ?>> Arial</input>
                    </p>

                    <label style="font-weight: bold; color:#271549" for="FontSize">Choisissez une taille de police
                        :</label>

                    <p><input class="form-check-input" name="FontSize" type="radio" value="16"
                            <?php echo ($fontsize_radio=='16')?'checked':'' ?>> Petite</input>
                        <input class="form-check-input" name="FontSize" type="radio" value="22"
                            <?php echo ($fontsize_radio=='22')?'checked':'' ?>> Moyenne</input>
                        <input class="form-check-input" name="FontSize" type="radio" value="27"
                            <?php echo ($fontsize_radio=='27')?'checked':'' ?>> Grande</input>
                        <input class="form-check-input" name="FontSize" type="radio" value="32"
                            <?php echo ($fontsize_radio=='32')?'checked':'' ?>> Très grande</input>
                    </p>

                    <label style="font-weight: bold; color:#271549" for="LineHeight">Choisissez l'espace entre les
                        lignes :</label>

                    <p><input class="form-check-input" name="LineHeight" type="radio" value="Small"
                            <?php echo ($linespace_radio=='Small')?'checked':'' ?>> Normal</input>
                        <input class="form-check-input" name="LineHeight" type="radio" value="Medium"
                            <?php echo ($linespace_radio=='Medium')?'checked':'' ?>> Moyen</input>
                        <input class="form-check-input" name="LineHeight" type="radio" value="Large"
                            <?php echo ($linespace_radio=='Large')?'checked':'' ?>> Grand</input>
                    </p>

                    <label style="font-weight: bold; color:#271549" for="BackgroundColor">Choisissez la couleur de fond
                        de la page :</label>

                    <p><input class="form-check-input" name="BackgroundColor" type="radio" value="#ffffff"
                            <?php echo ($bgcolor_radio=='#ffffff')?'checked':'' ?>> Blanc</input>
                        <input class="form-check-input" name="BackgroundColor" type="radio" value="#000000"
                            <?php echo ($bgcolor_radio=='#000000')?'checked':'' ?>> Noir</input>
                        <input class="form-check-input" name="BackgroundColor" type="radio" value="#ffcc99"
                            <?php echo ($bgcolor_radio=='#ffcc99')?'checked':'' ?>> Sable</input>
                    </p>

                    <label style="font-weight: bold; color:#271549" for="FontColor">Choisissez la couleur de la police
                        :</label>
                    <p>
                        <input class="form-check-input" name="FontColor" type="radio" value="#ffffff"
                            <?php echo ($fontcolor_radio=='#ffffff')?'checked':'' ?>> Blanc</input>
                        <input class="form-check-input" name="FontColor" type="radio" value="#000000"
                            <?php echo ($fontcolor_radio=='#000000')?'checked':'' ?>> Noir</input>
                        <input class="form-check-input" name="FontColor" type="radio" value="#ffff00"
                            <?php echo ($fontcolor_radio=='#ffff00')?'checked':'' ?>> Jaune</input>
                        <input class="form-check-input" name="FontColor" type="radio" value="#ffcc99"
                            <?php echo ($fontcolor_radio=='#ffcc99')?'checked':'' ?>> Beige</input>
                    </p>
                    <div class="ExemplePreferences">
                        <p class="ExemplePreferences">(Exemple) : Commençons par les variables, notion fondamentale en
                            développement.
                            Le but d'un programme est de faire quelque chose avec des données ou,
                            en d'autres termes, avec les choses que vous mettez dans votre programme.
                            Souvent, votre programme utilisera une ou plusieurs variables pour manipuler les
                            données.
                            Plus
                            précisément,
                            une variable est un conteneur utilisé pour stocker un élément de données dont votre
                            programme
                            pourrait
                            avoir
                            besoin.</p>
                    </div>

                    <label style="font-weight: bold; color:#271549" for="FirstHighlightColor">Choisissez la première
                        couleur de mise en évidence (titres
                        et
                        liens)
                        :</label>

                    <div class="PremiersBoutonsDAltonisme">
                        <p>
                            <input class="form-check-input" name="FirstHighlightColor" type="radio" value="#ff0000"
                                <?php echo ($elt1color_radio=='#ffff00')?'checked':'' ?>>
                            Rouge</input>
                            <input class="form-check-input" name="FirstHighlightColor" type="radio" value="#ffff00"
                                <?php echo ($elt1color_radio=='#ffff00')?'checked':'' ?>>
                            Jaune</input>
                            <input class="form-check-input" name="FirstHighlightColor" type="radio" value="#008000"
                                <?php echo ($elt1color_radio=='#008000')?'checked':'' ?>>
                            Vert</input>
                            <input class="form-check-input" name="FirstHighlightColor" type="radio" value="#00FFFF"
                                <?php echo ($elt1color_radio=='#00FFFF')?'checked':'' ?>>
                            Cyan</input>
                            <input class="form-check-input" name="FirstHighlightColor" type="radio" value="#0000FF"
                                <?php echo ($elt1color_radio=='#0000FF')?'checked':'' ?>>
                            Bleu</input>
                            <input class="form-check-input" name="FirstHighlightColor" type="radio" value="#800080"
                                <?php echo ($elt1color_radio=='#800080')?'checked':'' ?>>
                            Violet</input>
                        </p>
                    </div>

                    <p><a class="FirstColor" href="" for="FirstHighlightColor">Exemple de lien cliquable :</a>
                    </p>

                    <label style="font-weight: bold; color:#271549" for="SecondHighlightColor">Choisissez la deuxième
                        couleur de mise en évidence
                        (boutons)
                        :</label>

                    <div class="DeuxiemesBoutonsDAltonisme">
                        <p>
                            <input class="form-check-input" name="SecondHighlightColor" type="radio" value="#ff0000"
                                <?php echo ($elt2color_radio=='#ff0000')?'checked':'' ?>>
                            Rouge</input>
                            <input class="form-check-input" name="SecondHighlightColor" type="radio" value="#ffff00"
                                <?php echo ($elt2color_radio=='#ffff00')?'checked':'' ?>>
                            Jaune</input>
                            <input class="form-check-input" name="SecondHighlightColor" type="radio" value="#008000"
                                <?php echo ($elt2color_radio=='#008000')?'checked':'' ?>>
                            Vert</input>
                            <input class="form-check-input" name="SecondHighlightColor" type="radio" value="#00FFFF"
                                <?php echo ($elt2color_radio=='#00FFFF')?'checked':'' ?>>
                            Cyan</input>
                            <input class="form-check-input" name="SecondHighlightColor" type="radio" value="#0000FF"
                                <?php echo ($elt2color_radio=='#0000FF')?'checked':'' ?>>
                            Bleu</input>
                            <input class="form-check-input" name="SecondHighlightColor" type="radio" value="#800080"
                                <?php echo ($elt2color_radio=='#800080')?'checked':'' ?>>
                            Violet</input>
                        </p>
                    </div>

                    <p><input type="button" class="Demoinput btn btn-outline-primary" for="SecondHighlightColor"
                            value="Bouton Exemple">
                    </p>

                    <label style="font-weight: bold; color:#271549" for="SecondHighlightColor">Choisissez la troisième
                        couleur de mise en évidence
                        (exceptions)
                        :</label>

                    <div class="TroisiemesBoutonsDAltonisme">
                        <p>
                            <input class="form-check-input" name="ThirdHighlightColor" type="radio" value="#ff0000"
                                <?php echo ($elt3color_radio=='#ff0000')?'checked':'' ?>>
                            Rouge</input>
                            <input class="form-check-input" name="ThirdHighlightColor" type="radio" value="#ffff00"
                                <?php echo ($elt3color_radio=='#ffff00')?'checked':'' ?>>
                            Jaune</input>
                            <input class="form-check-input" name="ThirdHighlightColor" type="radio" value="#008000"
                                <?php echo ($elt3color_radio=='#008000')?'checked':'' ?>>
                            Vert</input>
                            <input class="form-check-input" name="ThirdHighlightColor" type="radio" value="#00FFFF"
                                <?php echo ($elt3color_radio=='#00FFFF')?'checked':'' ?>>
                            Cyan</input>
                            <input class="form-check-input" name="ThirdHighlightColor" type="radio" value="#0000FF"
                                <?php echo ($elt3color_radio=='#0000FF')?'checked':'' ?>>
                            Bleu</input>
                            <input class="form-check-input" name="ThirdHighlightColor" type="radio" value="#800080"
                                <?php echo ($elt3color_radio=='#800080')?'checked':'' ?>>
                            Violet</input>
                        </p>
                    </div>

                    <p><a class="DemoError" for="ThirdHighlightColor">Exception in thread "main"</p>

                    <input type="submit" class="btn btn-outline-primary" name="submit_update_db">
                </form>
            </div>
        </div>

    </div>
</div>
<?php include_once 'footer.php' ?>
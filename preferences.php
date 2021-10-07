<?php include_once 'header.php' ?>

<?php
if (isset($_POST['submit_update_db'])) {
    if (!empty($_POST['FontName'])) {
        $fontname = $_POST['FontName'];
    } else {
        echo 'Please select the value.';
    }
    if (!empty($_POST['FontSize'])) {
        $fontsize = $_POST['FontSize'];
    } else {
        echo 'Please select the value.';
    }
    if (!empty($_POST['BackgroundColor'])) {
        $bgcolor = $_POST['BackgroundColor'];
    } else {
        echo 'Please select the value.';
    }
    if (!empty($_POST['FontColor'])) {
        $fontcolor = $_POST['FontColor'];
    } else {
        echo 'Please select the value.';
    }
    updateDB($fontname, $fontsize, $fontcolor, "0", "0", "0", $bgcolor);
    //updateDB($fontname, $fontsize, $fontcolor, $eltcolor1, $eltcolor2, $eltcolor3, $bgcolor);
}
?>

<?php
global $connection;
$user_id = $_SESSION['user_id'];
//Fontfamily
$query = "SELECT user_fontfamily FROM users WHERE user_id = '" . $user_id . "'";
$result = $connection->query($query);
$fontname_array = $result->fetch();
$fontname_radio = $fontname_array[0];
//Fontsize
$query = "SELECT user_fontsize FROM users WHERE user_id = '" . $user_id . "'";
$result = $connection->query($query);
$fontsize_array = $result->fetch();
$fontsize_radio = $fontsize_array[0];
//LineHeight
//BackgroundColor
$query = "SELECT user_bgcolor FROM users WHERE user_id = '" . $user_id . "'";
$result = $connection->query($query);
$bgcolor_array = $result->fetch();
$bgcolor_radio = $bgcolor_array[0];
//FontColor
$query = "SELECT user_fontcolor	FROM users WHERE user_id = '" . $user_id . "'";
$result = $connection->query($query);
$fontcolor_array = $result->fetch();
$fontcolor_radio = $fontcolor_array[0];
?>

<div class="preferencestexte">
    <form method="post" action="">
        <label for="FontName">Choisissez une police :</label>

        <p><input class="form-check-input" name="FontName" type="radio" value="Normale" <?php echo ($fontname_radio == 'Normale') ? 'checked' : '' ?>>
            Normale</input>
            <input class="form-check-input" name="FontName" type="radio" value="Luciole" <?php echo ($fontname_radio == 'Luciole') ? 'checked' : '' ?>> Luciole</input>
            <input class="form-check-input" name="FontName" type="radio" value="Arial" <?php echo ($fontname_radio == 'Arial') ? 'checked' : '' ?>> Arial</input>
        </p>

        <label for="FontSize">Choisissez une taille de police :</label>

        <p><input class="form-check-input" name="FontSize" type="radio" value="16" <?php echo ($fontsize_radio == '16') ? 'checked' : '' ?>> Petite</input>
            <input class="form-check-input" name="FontSize" type="radio" value="20" <?php echo ($fontsize_radio == '20') ? 'checked' : '' ?>> Moyenne</input>
            <input class="form-check-input" name="FontSize" type="radio" value="24" <?php echo ($fontsize_radio == '24') ? 'checked' : '' ?>> Grande</input>
            <input class="form-check-input" name="FontSize" type="radio" value="28" <?php echo ($fontsize_radio == '28') ? 'checked' : '' ?>> Très grande</input>
        </p>

        <label for="LineHeight">Choisissez l'espace entre les lignes :</label>

        <p><input class="form-check-input" name="LineHeight" type="radio" value="Small"> Normal</input>
            <input class="form-check-input" name="LineHeight" type="radio" value="Medium"> Moyen</input>
            <input class="form-check-input" name="LineHeight" type="radio" value="Large"> Grand</input>
        </p>

        <label for="BackgroundColor">Choisissez la couleur de fond de la page :</label>

        <p><input class="form-check-input" name="BackgroundColor" type="radio" value="#ffffff" <?php echo ($bgcolor_radio == '#ffffff') ? 'checked' : '' ?>> Blanc</input>
            <input class="form-check-input" name="BackgroundColor" type="radio" value="#000000" <?php echo ($bgcolor_radio == '#000000') ? 'checked' : '' ?>> Noir</input>
            <input class="form-check-input" name="BackgroundColor" type="radio" value="#ffcc99" <?php echo ($bgcolor_radio == '#ffcc99') ? 'checked' : '' ?>> Sable</input>
        </p>

        <label for="FontColor">Choisissez la couleur de la police :</label>
        <p>
            <input class="form-check-input" name="FontColor" type="radio" value="#ffffff" <?php echo ($fontcolor_radio == '#ffffff') ? 'checked' : '' ?>> Blanc</input>
            <input class="form-check-input" name="FontColor" type="radio" value="#000000" <?php echo ($fontcolor_radio == '#000000') ? 'checked' : '' ?>> Noir</input>
            <input class="form-check-input" name="FontColor" type="radio" value="#ffff00" <?php echo ($fontcolor_radio == '#ffff00') ? 'checked' : '' ?>> Jaune</input>
            <input class="form-check-input" name="FontColor" type="radio" value="#ffcc99" <?php echo ($fontcolor_radio == '#ffcc99') ? 'checked' : '' ?>> Beige</input>
        </p>

</div>

<div class="ExemplePreferences">
    <p id="text-demo">Commençons par les variables, notion fondamentale en développement.
        Le but d'un programme est de faire quelque chose avec des données ou,
        en d'autres termes, avec les choses que vous mettez dans votre programme.
        Souvent, votre programme utilisera une ou plusieurs variables pour manipuler les données. Plus précisément,
        une variable est un conteneur utilisé pour stocker un élément de données dont votre programme pourrait avoir
        besoin.</p>
</div>

<label for="FirstHighlightColor">Choisissez la première couleur de mise en évidence (titres et liens) :</label><br>

<div class="PremiersBoutonsDAltonisme">
    <input name="FirstHighlightColor" type="submit" value="Red">Rouge</input>
    <input name="FirstHighlightColor" type="submit" value="Yellow">Jaune</input>
    <input name="FirstHighlightColor" type="submit" value="Green">Vert</input>
    <input name="FirstHighlightColor" type="submit" value="Cyan">Cyan</input>
    <input name="FirstHighlightColor" type="submit" value="Blue">Bleu</input>
    <input name="FirstHighlightColor" type="submit" value="Purple">Violet</input><br><br>
</div>

<a class="FirstColor" href="" for="FirstHighlightColor">Exemple de lien cliquable :</a><br><br>

<label for="SecondHighlightColor">Choisissez la deuxième couleur de mise en évidence (boutons) :</label><br>

<div class="DeuxiemesBoutonsDAltonisme">
    <input name="SecondHighlightColor" type="submit" value="Red">Rouge</input>
    <input name="SecondHighlightColor" type="submit" value="Yellow">Jaune</input>
    <input name="SecondHighlightColor" type="submit" value="Green">Vert</input>
    <input name="SecondHighlightColor" type="submit" value="Cyan">Cyan</input>
    <input name="SecondHighlightColor" type="submit" value="Blue">Bleu</input>
    <input name="SecondHighlightColor" type="submit" value="Purple">Violet</input><br><br>
</div>

<input class="Demoinput" for="SecondHighlightColor">Bouton exemple</input><br><br>

<div class="TroisiemesBoutonsDAltonisme">
    <input name="ThirdHighlightColor" type="submit" value="Red">Rouge</input>
    <input name="ThirdHighlightColor" type="submit" value="Yellow">Jaune</input>
    <input name="ThirdHighlightColor" type="submit" value="Green">Vert</input>
    <input name="ThirdHighlightColor" type="submit" value="Cyan">Cyan</input>
    <input name="ThirdHighlightColor" type="submit" value="Blue">Bleu</input>
    <input name="ThirdHighlightColor" type="submit" value="Purple">Violet</input><br><br>
</div>

<a class="DemoError" for="ThirdHighlightColor">Exception in thread "main"</input><br><br>

    <input type="submit" name="submit_update_db">
    </form>
    <?php include_once 'footer.php' ?>
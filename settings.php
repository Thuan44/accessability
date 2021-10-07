<?php include_once 'header.php' ?>

<?php

if (isset($_POST['submit_update_db'])) {
    $fontname = $_POST['FontName'];
    $fontsize = $_POST['fontsize'];
    $fontcolor = $_POST['fontcolor'];
    $eltcolor1 = $_POST['element1color'];
    $eltcolor2 = $_POST['element2color'];
    $eltcolor3 = $_POST['element3color'];
    $bgcolor = $_POST['bgcolor'];

    updateDB($fontname, $fontsize, $fontcolor, $eltcolor1, $eltcolor2, $eltcolor3, $bgcolor);
}
?>

<?php 
    $user_id = $_SESSION['user_id'];
?>

<?php 
    global $connection;
    $query = "SELECT * FROM users WHERE user_id = '".$user_id."' ";
    $result = $connection->query($query);

    while($row = $result->fetch()){
        
?>

<form method="post" action="">

    <label>Choisissez une police :</label>

    <p><input id="FontName1" name="FontName1" type="submit" value="Normale"></input>
        <input id="FontName2" name="FontName2" type="submit" value="Luciole"></input>
        <input id="FontName3" name="FontName3" type="submit" value="Arial"></input>
    </p>

    <label>Choisissez une taille de police :</label>
    <p> <input name="FontSize1" type="submit" value="Small"></input>
        <input name="FontSize2" type="submit" value="Medium"></input>
        <input name="FontSize3" type="submit" value="Large"></input>
        <input name="FontSize4" type="submit" value="ExtraLarge"></input>
    </p>


    <p> Taille de la police : <input id="fontsize" type="text" name="fontsize"
            value="<?php echo $row['user_fontsize']; ?>"> </p>
    <p> Couleur de la police : <input id="fontcolor" type="text" name="fontcolor"
            value="<?php echo $row['user_fontcolor']; ?>"> </p>
    <p> Couleur élément 1 : <input id="element1color" type="text" name="element1color"
            value="<?php echo $row['user_eltcolor_1']; ?>"></p>
    <p> Couleur élément 2 : <input id="element2color" type="text" name="element2color"
            value="<?php echo $row['user_eltcolor_2']; ?>"></p>
    <p> Couleur élément 3 : <input id="element3color" type="text" name="element3color"
            value="<?php echo $row['user_eltcolor_3']; ?>"></p>
    <p> Couleur de fond : <input id="bgcolor" type="text" name="bgcolor" value="<?php echo $row['user_bgcolor']; ?>">
    </p>

    <input type="submit" name="submit_update_db">
</form>

<?php } ?>

<script>
</script>

<?php include_once 'footer.php' ?>
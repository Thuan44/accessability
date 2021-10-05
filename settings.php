<?php include_once 'header.php' ?>

<?php
if (isset($_POST['submit_update_db'])) {
    updateDB($_POST['fontsize']);
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
    <p> Taille de la police : <input id="fontsize" type="text" name="fontsize"
            value="<?php echo $row['user_fontsize']; ?>"> </p>
    <p> Couleur de la police : <input id="fontcolor" type="text" name="fontcolor"
            value="<?php echo $row['user_fontcolor']; ?>"> </p>
    <p> Type de police : <input id="font" type="text" name="font" value="<?php echo $row['user_fontfamily']; ?>">
    </p>
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

<?php include_once 'footer.php' ?>
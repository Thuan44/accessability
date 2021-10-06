<?php include_once 'header.php' ?>

<?php
if (isset($_POST['submit-preferences'])) {

  echo "<pre>";
  print_r($_POST);
  echo "</pre>";
}
?>

<form action="#" method="POST">
  <div class="preferencestexte">

    <label for="FontName">Choisissez une police :</label><br>

    <div>
      <input type="radio" id="huey" name="drone" value="huey" checked>
      <label for="huey">Huey</label>
    </div>

    <div>
      <input type="radio" id="dewey" name="drone" value="dewey">
      <label for="dewey">Dewey</label>
    </div>

    <div>
      <input type="radio" id="louie" name="drone" value="louie">
      <label for="louie">Louie</label>
    </div>

    <input name="FontName" type="button" value="Normale">
    <input name="FontName" type="button" value="Luciole">
    <input name="FontName" type="button" value="Arial"></button><br>

    <label for="FontSize">Choisissez une taille de police :</label><br>

    <input name="FontSize" type="button" value="Small">
    <input name="FontSize" type="button" value="Medium">
    <input name="FontSize" type="button" value="Large">
    <input name="FontSize" type="button" value="ExtraLarge"><br>

    <label for="LineHeight">Choisissez l'espace entre les lignes :</label><br>

    <input name="LineHeight" type="button" value="Small">
    <input name="LineHeight" type="button" value="Medium">
    <input name="LineHeight" type="button" value="Large"><br>


    <label for="BackgroundColor">Choisissez la couleur de fond de la page :</label><br>

    <input name="BackgroundColor" type="button" value="White">
    <input name="BackgroundColor" type="button" value="Black">
    <input name="BackgroundColor" type="button" value="Send"><br>

    <label for="FontColor">Choisissez la couleur de la police :</label><br>

    <input name="FontColor" type="button" value="White">
    <input name="FontColor" type="button" value="Black">
    <input name="FontColor" type="button" value="Yellow">
    <input name="FontColor" type="button" value="Beige">

  </div>

  <div class="ExemplePreferences">
    <p>Commençons par les variables, notion fondamentale en développement.
      Le but d'un programme est de faire quelque chose avec des données ou,
      en d'autres termes, avec les choses que vous mettez dans votre programme.
      Souvent, votre programme utilisera une ou plusieurs variables pour manipuler les données. Plus précisément,
      une variable est un conteneur utilisé pour stocker un élément de données dont votre programme pourrait avoir besoin.</p>
  </div>

  <label for="FirstHighlightColor">Choisissez la première couleur de mise en évidence (titres et liens) :</label><br>

  <div class="PremiersBoutonsDAltonisme">
    <button name="FirstHighlightColor" type="button" value="Red">Rouge</button>
    <button name="FirstHighlightColor" type="button" value="Yellow">Jaune</button>
    <button name="FirstHighlightColor" type="button" value="Green">Vert</button>
    <button name="FirstHighlightColor" type="button" value="Cyan">Cyan</button>
    <button name="FirstHighlightColor" type="button" value="Blue">Bleu</button>
    <button name="FirstHighlightColor" type="button" value="Purple">Violet</button><br><br>
  </div>

  <a class="FirstColor" href="" for="FirstHighlightColor">Exemple de lien cliquable :</a><br><br>

  <label for="SecondHighlightColor">Choisissez la deuxième couleur de mise en évidence (boutons) :</label><br>

  <div class="DeuxiemesBoutonsDAltonisme">
    <button name="SecondHighlightColor" type="button" value="Red">Rouge</button>
    <button name="SecondHighlightColor" type="button" value="Yellow">Jaune</button>
    <button name="SecondHighlightColor" type="button" value="Green">Vert</button>
    <button name="SecondHighlightColor" type="button" value="Cyan">Cyan</button>
    <button name="SecondHighlightColor" type="button" value="Blue">Bleu</button>
    <button name="SecondHighlightColor" type="button" value="Purple">Violet</button><br><br>
  </div>

  <button class="DemoButton" for="SecondHighlightColor">Bouton exemple</button><br><br>

  <label for="ThirdHighlightColor">Choisissez la troisième couleur de mise en évidence (élements importants et erreurs) :</label><br>

  <div class="TroisiemesBoutonsDAltonisme">
    <button name="ThirdHighlightColor" type="button" value="Red">Rouge</button>
    <button name="ThirdHighlightColor" type="button" value="Yellow">Jaune</button>
    <button name="ThirdHighlightColor" type="button" value="Green">Vert</button>
    <button name="ThirdHighlightColor" type="button" value="Cyan">Cyan</button>
    <button name="ThirdHighlightColor" type="button" value="Blue">Bleu</button>
    <button name="ThirdHighlightColor" type="button" value="Purple">Violet</button><br><br>
  </div>

  <a class="DemoError" for="ThirdHighlightColor">Exception in thread "main"</button><br><br>

    <button class="btn btn-success w-100" name="submit-preferences">Valider mes préférences</button>
</form>

<?php include_once 'footer.php' ?>
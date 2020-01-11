<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Les Boucles</title>
  </head>
  <body>
    <?php
    /* EXERCICE 1 - Nombre impaires de 0 à 150 */
      echo "<h2>EXERCICE 1</h2>";

      $i = -1;
      while (++$i <= 150)
      {
        if ($i % 2 != 0)
          echo "$i . ";
      }


    /* EXERCICE 2 - Ecrire 500 fois la phrases */
    echo "<br><hr><h2>EXERCICE 2</h2>";

      $i = 0;
      while (++$i <= 500)
        echo "$i : Je dois faire des sauvegardes régulières de mes fichiers. ";

    /* EXERCICE 3 - Table de multiplication 12 x 12 */
    echo "<br><hr><h2>EXERCICE 3</h2>";

    /* J'ajoute du code CSS : ATTENTION - Utiliser "" et '' */
      echo '<link rel="stylesheet" href="assets/CSS/ex3.css">';

      $i = -1;
      $j = -1;
      echo "<table>";
      echo "<tr>";
      echo "<td><h4>X</h4></td>";
      while (++$j <= 12)
        echo "<td><h5>$j</h5></td>";       // J'affiche la ligne du haut
      echo "</tr>";
      $j = -1;
      while (++$j <= 12)
      {
        $i = -1;                          // Je remets i à -1 à chaque nouvelle entrée dans la boucle
        echo "<tr>";
        echo "<td><h5>$j</h5></td>";      // J'affiche la ligne de gauche
        while (++$i <= 12)
        {
          $res = $i * $j;
          echo "<td>$res</td>";
        }
        echo "</tr>";
      }
      echo "</table>";
      ?>
  </body>
</html>

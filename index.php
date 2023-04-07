<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="refresh" content="10">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php

    $nom = 'Smith'; // Chaîne de caractère
    $prenom = 'John'; // Chaîne de caractère
    $age = 2; // Nombren entier
    $adresse = '2 rue de quelque-part, 44000, Nantes';
    $estEtudiant = true; // Booléen

    echo 'Nom : ' . $nom . "<br/>";
    echo 'Prénom : ' . $prenom . "<br/>";
    echo 'Age : ' . $age . "<br/>";
    echo 'Adresse : ' . $adresse . "<br/>";
    echo 'Est-il étudiant ? : ' . $estEtudiant . "<br/>";

    echo '<br/>';
    echo '--- Opérations mathématiques --- <br />';

    $a = 5;
    $b = 10;
    $c = 15;

    $resultat = $a % $b;
    echo $resultat;

  ?>
</body>
</html>

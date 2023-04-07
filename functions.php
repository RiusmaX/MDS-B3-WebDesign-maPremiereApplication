<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  // Procédure
  function afficherLeTexte($texte) {
    echo $texte;
    echo '<br />';
  }

  // Fonction (ou méthode)
  function additionner($nombre1, $nombre2) {
    return $nombre1 + $nombre2;
  }

  function mettreEnMajuscule($texte) {
    return strtoupper($texte);
  }

  function afficherLaTableDeMultiplication($nombre) {
    $resultat = '';
    for ($i = 1; $i <= 10; $i++) {
      $resultat = $resultat . $i . 'x' . $nombre . '=' . $i * $nombre . '<br />';
    }
    return $resultat;
  }

  afficherLeTexte('TOTO');
  afficherLeTexte(additionner(234678, 67897));
  afficherLeTexte(mettreEnMajuscule('super !!!!!'));
  afficherLeTexte(afficherLaTableDeMultiplication(5));
?>
</body>
</html>
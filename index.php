<?php
require_once __DIR__ . './Model/movie.php';

  $Green_Lantern = new Movie('Green Lantern', 'DC' );
  $Green_Lantern->genre = 'Action';
  $Green_Lantern->setIsGood(20);

  $Avengers = new Movie( 'Avengers', 'Marvel');
  $Avengers->genre = 'Action';
  $Avengers->setIsGood(100);

  var_dump($Green_Lantern);
  var_dump($Green_Lantern -> getFullName());
  var_dump($Avengers);
  var_dump($Avengers -> getFullName());

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP MOVIES</title>
</head>
<body>
  
</body>
</html>
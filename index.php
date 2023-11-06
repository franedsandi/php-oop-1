<?php
  class Movie {
    public $name;
    public $productors_company;
    public $genre;
    public $isGood;

    public function setIsGood($punteggio) {
      if ($punteggio > 50) {
        $this->isGood = 'is a good movie';
      } else {
        $this->isGood = 'is a terrible movie';
      }
    }
    public function getFullName(){
      return "{$this->productors_company} {$this->name}";
    }

    public function __construct($_name, $_productors_company){
      $this->name = $_name;
      $this->productors_company = $_productors_company;
    }
  }

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
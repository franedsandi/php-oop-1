<?php
class production {
  public $name;
  public $productors_company;
  public $genre;
  public $isGood;

  public function setIsGood($punteggio) {
    if ($punteggio > 50) {
      $this->isGood = 'is good ';
    } else {
      $this->isGood = 'is terrible';
    }
  }

  public function getFullName(){
    return "{$this->productors_company} {$this->name}";
  }
  
  public function __construct($_name, $_productors_company, Genre $_genre , $_punteggio ){
    $this->name = $_name;
    $this->productors_company = $_productors_company;
    $this->genre = $_genre;
    $this->setIsGood($_punteggio);
  }
}
?>
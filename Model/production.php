<?php
class production {

  use publishyears;

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
  
  public function __construct(string $_name, string $_productors_company, array $_genre , float $_punteggio, float $_year = null){
    $this->name = $_name;
    $this->productors_company = $_productors_company;
    if(empty($_genre)){
      throw new Exception("there is no movie or tvserie witout any genre");
    }else{
      $this->genre = $_genre;
    }
    $this->setIsGood($_punteggio);
    $this->year = $_year;
  }
  public function getFullInfo(){
    return "Name: $this->name, Company: $this->productors_company , Genres:  ". implode(" & ", $this->genre);

  }
}
?>
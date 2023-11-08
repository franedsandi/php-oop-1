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
    if(empty($_name)){
      throw new Exception("dont forget that everything have a name ... ");
    }else{
      $this->name = $_name;
    }
    if(empty($_productors_company)){
      throw new Exception("dude how dont you know who made $this->name ... ");
    }else{
      $this->productors_company = $_productors_company;
    }
    
    if(empty($_genre)){
      $classType = get_class($this);
      if($classType === "movie"){
          throw new Exception("There is no movie without any genre, i'm talking about $this->name the $this->productors_company movie" );
      } elseif($classType === "tvserie"){
          throw new Exception("There is no TV series without any genre, i'm talking about $this->name the $this->productors_company TV serie");
      } else {
          throw new Exception("Unknown production type");
      }
  } else {
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
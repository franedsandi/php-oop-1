<?php
class tvserie extends production{
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;

  public function __construct(string $_name, string $_productors_company, array $_genre , float $_punteggio , float $_year, float $_aired_to_year, string $_number_of_episodes, $_number_of_seasons, float $_actual_year = 2023){
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;
    $this->actual_year = $_actual_year;

    parent::__construct( $_name, $_productors_company, $_genre , $_punteggio, $_year);
  }
  public function getFullInfo(){
    $productionInfo = parent::getFullInfo();
    return "$productionInfo , Endend on the year :$this->aired_to_year , Episodes:$this->number_of_episodes,  Seasons: $this->number_of_seasons ";
  }
}
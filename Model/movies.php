<?php
class movie extends production{
  public $published_year;
  public $running_time;

  public function __construct($_name, $_productors_company, Genre $_genre , $_punteggio , $_published_year = null, $_running_time = null){
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;

    parent::__construct($_name, $_productors_company, $_genre , $_punteggio);
  }
}
<?php
class movie extends production{
  public $running_time;
  public $actual_year;

  public function __construct(string $_name, string $_productors_company, array $_genre , float $_punteggio, float $_year, string $_running_time = null, float $_actual_year = 2023 ){
    $this->running_time = $_running_time;
    $this->actual_year = $_actual_year;


    parent::__construct( $_name, $_productors_company, $_genre , $_punteggio, $_year);
  }
  public function getFullInfo(){
    $productionInfo = parent::getFullInfo();
    return "$productionInfo , Lenght: $this->running_time";
  }
}
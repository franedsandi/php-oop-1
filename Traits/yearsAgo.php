<?php

trait publishyears{
  public $year;
  public $actual_year;

  public function getYearsAgo(){
    return $this->actual_year - $this->year;
  }
}
<?php
class Genre {
  public $main_genre;
  public $secondary_genre;

  public function __construct($_main_genre, $_secondary_genre){
    $this->main_genre = $_main_genre;
    $this->secondary_genre = $_secondary_genre;
  }
  
  public function getAllGenres(){
    return $this->main_genre . ", " . $this->secondary_genre;
  }
}
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}

class Point {
  private $x;
  private $y;

  function __construct($x,$y){
    $this -> x =$x;
    $this -> y =$y;

  }

  public function __getX(){
      return $this -> x;
  }
  public function __setX($x){
      $this -> x= $x;
  }
  public function __getY(){
      return $this -> y;
  }
  public function __setY($y){
      $this -> y= $y;
  }
  public function moveTo($newX,$newY){
    $this -> x =$newsX;
    $this -> y = $newsY;
  }

}




 ?>

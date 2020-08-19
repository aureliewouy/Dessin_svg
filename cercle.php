<?php
if (!isset($_SESSION)) {
session_start();
}


class Cercle  extends Figure {
  protected $rayon;

  public function __construct($c,$o,$x,$y,$r){
    parent::__construct($c,$o,$x,$y);
    $this -> rayon = $r;
  }
  public function __getRayon(){
    return $this -> rayon;
  }
  public function __setRayon($r){
    $this -> rayon= $r;
  }
  public function dessiner(){
    $dessinCer = "<circle cx='".$this-> origine -> __getX()."' cy='".$this-> origine -> __getY()."' r='".$this -> __getRayon()."' fill='".$this-> __getCouleur()."' opacity='".$this-> __getOpacite()."' />";
    return $dessinCer;
  }
}

 ?>

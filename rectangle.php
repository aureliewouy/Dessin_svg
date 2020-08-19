<?php
if (!isset($_SESSION)) {
session_start();
}
class Rectangle extends Figure {
  private $longueur;
  private $hauteur;


  public function __construct($c,$o,$x,$y,$l,$h){
    parent::__construct($c,$o,$x,$y);
    $this -> longueur = $l;
    $this -> hauteur = $h;

  }
  public function __getHauteur(){
    return $this-> hauteur;
  }
  /*public function __setHauteur($h){
    $this -> hauteur = $h;
  }*/
  public function __getLongueur(){
    return $this-> longueur;
  }
  /*public function __setLongueur($l){
    $this -> longueur = $l;
  }*/
  public function dessiner(){
    $dessinRect = "<rect x='".$this-> origine -> __getX()."' y='".$this-> origine -> __getY()."' width='".$this->__getLongueur()."' height='".$this-> __getHauteur()."' fill='".$this-> __getCouleur()."' opacity='".$this-> __getOpacite()."' />";
    return $dessinRect;
  }


  }



 ?>

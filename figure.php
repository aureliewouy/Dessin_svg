<?php
  include 'point.php';

  if (!isset($_SESSION)) {
  session_start();
  }

 abstract class Figure {
  protected $couleur;
  protected $opacite;
  protected $origine;



  public function __construct($c,$o,$x,$y){
    $this-> couleur = $c;
    $this -> opacite = $o;
    $this -> origine = new Point($x,$y);

  }
  public function __getCouleur(){
    return $this -> couleur;
  }
  public function __setCouleur($c){
    $this -> couleur= $c;
  }
  public function __getOpacite(){
    return $this -> opacite;
  }
  public function __setOpacite($o){
    $this -> opacite= $o;
  }

  public function __getOrigine(){
    return $this -> origine;
  }
  public function __setOrigine($or){
    $this -> origine= $or;
  }
  abstract public function dessiner();

}


 ?>

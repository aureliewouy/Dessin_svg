<?php

include 'figure.php';
include 'rectangle.php';
include "cercle.php";

if (!isset($_SESSION)) {
  session_start();
}

if (isset($_SESSION['formes'])) {
$formes= $_SESSION['formes'] ;
}
else {
  $formes =array();
}

if ($_SERVER['REQUEST_METHOD']=="POST") {
  if(array_key_exists("opacite",$_POST) && array_key_exists("x",$_POST) && array_key_exists("y",$_POST) && array_key_exists("couleur",$_POST) && array_key_exists("forme",$_POST)){
    $opacite = $_POST['opacite'];
    $x = $_POST['x'];
    $y = $_POST['y'];
    $couleur = $_POST['couleur'];
    $forme = $_POST['forme'];
    /*$_SESSION['formes']=$formes;*/
    switch ($forme) {
      case 'rectangle':
        $h =$_POST['hauteur'];
        $l =$_POST['longueur'];
        $rectangle= new Rectangle($couleur,$opacite,$x,$y,$l,$h);
        array_push($formes, $rectangle -> dessiner());
        $_SESSION['formes']=$formes;
        break;

      case 'cercle':
        $rayon=$_POST['rayon'];
        $cercle = new Cercle($couleur,$opacite,$x,$y,$rayon);
        array_push($formes, $cercle -> dessiner());
        $_SESSION['formes']=$formes;
        break;

    }
    include 'index.phtml';
 }
}

?>

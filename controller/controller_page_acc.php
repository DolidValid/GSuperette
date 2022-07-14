<?php
include_once('../model/connexion_sql.php');
include_once('../model/model_produit.php');
session_start();

if(empty($_SESSION['logged_in'])){
   header("Location: http://localhost/GSuperette/controller/controller_login.php");
   die();
}


$extincteur = new extin();

if (isset($_GET['id'])) {
  
   $extincteur->supp($bdd,$_GET['id']);

}



$extine= $extincteur->afficher($bdd);
$nbrPerime = $extincteur-> nbrExtinPerime($bdd); 



include_once('../views/view_accuille.php');

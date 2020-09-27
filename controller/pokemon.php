<?php
  require_once("../models/Pokemon.php");
  $pokemon= new Pokemon();
  switch($_GET["op"]){
   case "listar":
    $datos=$pokemon->get_pokemon();
    
  }
?>
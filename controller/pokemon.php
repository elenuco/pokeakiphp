<?php
  require_once("../models/Pokemon.php");
  header('Content-Type: application/json');
  $pokemon= new Pokemon();
  switch($_GET["op"]){
   case "listar":
    $datos=$pokemon->get_pokemon();
    $data=Array();
    foreach($datos['results'] as $row){
      $datos2= $pokemon->get_pokemon_x_id($row["url"]);
       $sub_array= array();
       $sub_array[]='<img src="'.$datos2["image"].'" class="img-thumbnail">';
       $sub_array[]=$row['name'];
       $sub_array[]='<a href="pokemon.php?numero='.$datos2['numero'].'">'.$datos2['numero'].'</a>';
       $data[]=$sub_array;
    }
    $results= array(
        "sEcho"=>1,
        "iTotalRecords"=>count($data),
        "iTotalDisplayRecords"=>count($data),
        "aaData"=>$data);
        echo json_encode($results);
    break;
  }
?>
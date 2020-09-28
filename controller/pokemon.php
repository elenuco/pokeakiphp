<?php
  require_once("../models/Pokemon.php");
  $pokemon= new Pokemon();
  switch($_GET["op"]){
   case "listar":
    $datos=$pokemon->get_pokemon_x_id();
    $data=Array();
    foreach($datos['results'] as $row){
       $sub_array= array();
       $sub_array[]='<img src=" " class="img-thumbnail">';
       $sub_array[]=$row['name'];
       $sub_array[]=$row['url'];
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
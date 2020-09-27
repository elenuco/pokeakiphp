<?php
class Pokemon{
    public function get_pokemon(){
     $url='https://pokeapi.co/api/v2/pokemon/?offset=0&limit=5';
     $json= file_get_contents($url);
     $array=json_decode($json,true);
     return $array;
    }
}

?>
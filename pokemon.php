<?php
$pokemon_json= file_get_contents('https://pokeapi.co/api/v2/pokemon/'.$_GET["numero"]);
$pokemon_data=json_decode($pokemon_json, true);
$specie_json=file_get_contents('https://pokeapi.co/api/v2/pokemon-species/'.$_GET["numero"]);
$specie_data=json_decode($specie_json, true);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>pokemon</title>
<meta charset="utf8" />
<meta name="viewport" />
<!---css--->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
</head>
<body>
<!----inicio del container--->
<div id="container">
<div class="panel panel-default">
<div class="panel-body">
<table class="table">
<tr>
<th>Imagen</th>
<td>
<?php
echo '<img src="https://pokeres.bastionbot.org/images/pokemon/'.$_GET["numero"].'.png" alt="" />'
?>
</td>
</tr>
<tr>
<th>Id</th>
<td>
<?php
echo $_GET['numero']
?>
</td>
</tr>
<tr>
<th>Nombre</th>
<td><?php
echo $pokemon_data['name']
?></td>
</tr>
<tr>
<th>Descripcion</th>
<td>
<?php
echo $specie_data["flavor_text_entries"][0]["flavor_text"];
?>
</td>
</tr>
<tr>
<th>Generacion</th>
<td>
<?php
echo $specie_data["generation"]["name"];
?>
</td>
</tr>
</table>
</div>
</div>
</div>
<!----scripts--->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
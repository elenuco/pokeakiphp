function init(){

}
$(document).ready(function(){
	$('#pokemon_table').DataTable( {
		"ajax": {
			            "type": "GET",
			            "url": "controller/pokemon.php?op=listar"
			        },
			        "lengthMenu": [
			            [5, 10, 12, -1],
			            [5, 10, 12, "All"]
			        ],
			        "pageLength": 10,
			        "cache": false,
			        "order": [
			            [0, 'desc']
			        ],
	} );
} );
init();
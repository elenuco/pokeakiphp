function init(){

}
$(document).ready(function(){
	$('#pokemon_tabla').DataTable( {
		"ajax": {
			            "type": "GET",
			            "url": "https://pokeapi.co/api/v2/pokemon/?offset=0&limit=5&fbclid=IwAR1Zvu99a0yvqm52sRC994gyUm0d-t-Tiir5PI-IY7O0lkInPcbAiWnnmWc",
			            "dataSrc": "",
			            "beforeSend": function(request) {
			            },
			            "data": function(d) {
			            },
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
	} ).DataTable();
} );
init();
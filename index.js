function init(){

}
$(document).ready(function(){
    $('#pokemon_table').dataTable({
        "aProcesing":true,//activamos el procesamiento de dataTables
        "aServerSide":true,//Paginacion y filtrados realizados por el servidor
        "searching":true,
        lengthChange:true,
        colReorder:true,
        "ajax":{
            url:'controller/pokemon.php?op=listar',
            type:"post",
            dataType:"json",
            error: function(e){
                console.log(e.resposeText);
            }
        },
        "bDestroy":true,
        "responsive":true,
        "bInfo":true,
        "iDisplayLength":10,
        "order":[[1,"asc"]],
        "language":{
            "sProcesing": "Procesando.....",
            "sLengthMenu": "Mostrar _MENU_registros",
            "sZeroRecords":"No se en contraron resultados",
            "sEmptyTable": " Ningun dato disponible en esta tabla",
            "sInfo" : "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty":"Mostrando un total de 0 registros",
            "sInfoFiltered": "(filtrando un total de _MAX_ registros)",
            "sInfoPostfix": "",
            "sSearch" : "Buscar:",
            "sUrl": "",
            "sInfoThousands": ",",
            "sLoadingRecords": "Cargando...",
            "oPaginate": {
                "sFirst": "Primero",
                "sLast" : "Ultimo",
                "sNext" : "Siguente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "aSortAscending": "Activar para ordenar la columna de manera ascendente",
                "aSortDescending":"Activa para ordenar la columna de manera descendente"
            }
        }
    }).DataTable();
});
init();
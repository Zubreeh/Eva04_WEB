$(document).ready(function(){

})

function getProductos(){
    $.ajax({
        url: 'http://localhost/Eva03/backend/',
        type: 'GET',
        dataType: 'json',
        success:function(prod){
            console.log(prod)
           // $.each(prod.productos,function(){

           // })

        }
    })
}
function enviarProducto(){

    var nombreProducto=$("#nombreProducto").val()
    var descProducto=$("descProducto").val()
    var codigo=$("codigo").val()
    var urlIma=$("urlIma").val()

    if(nombreProducto=='' || descProducto=='' || codigo=='' || urlIma==''){
        alert("Favor llenar todos los campos")
        return 0;
    }else{

        var prodEnviar={
            'nombreProducto' :nombreProducto,
            'descProducto' :descProducto,
            'codigo' :codigo,
            'urlIma' :urlIma,
        }

    }

    $.ajax({
        url: 'http://localhost/Eva03/backend/',
        type: 'GET',
        dataType: 'json',
        success:function(prod){

        }
    })

}
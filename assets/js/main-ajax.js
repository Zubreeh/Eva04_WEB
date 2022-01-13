$(document).ready(function(){

})

function getProductos(){
    $.ajax({
        url: 'http://localhost/Eva03/backend/getProd.php',
        type: 'GET',
        dataType: 'json',
        success:function(prod){
            console.log(prod)
        let tr='';
        $.each(prod.productos,function(index,value){
            tr+='<tr>'
            +'<td>'+value.nombrePr+'</td>'
            +'<td>'+codPr+'</td>'
            +'<td><button class= "btn btn-danger btn-xs" onClick="eliminarProducto()">Eliminar</button></td>'
            
        })   
        }
    })
}
setInterval("getProductos()",3000)
function enviarProducto(){

    var nombreProducto=$("#nombreProducto").val()
    var descProducto=$("#descProducto").val()
    var codigo=$("#codigo").val()
    var urlIma=$("#urlIma").val()

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
        'url': 'http://localhost/Eva03/backend/saveProd.php',
        'type': 'POST',
        'dataType': 'Json',
        'data' : prodEnviar,
        success:function(prodEnviar){
            console.log(prodEnviar)
        }
    })

}
function getProd2(){
    $.ajax({
        url: 'http://localhost/Eva03/backend/getProd.php',
        type: 'GET',
        dataType: 'json',
        success:function(prod){
            console.log(prod)
        let tr='';
        $.each(prod.productos,function(index,value){
            tr+='<tr>'
            +'<td>'+value.nombrePr+'</td>'
            +'<td>'+codPr+'</td>'
    })
    }
    })
}
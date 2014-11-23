$(document).ready(function sumar(){

      $('#sumar').click(function() {

               

                   //obtengo el contenido de las variables
                  var val11 = $('#val11').val();
                  var val12 = $('#val12').val();

                  //Convierto el Contenido en Nro Entero

                  var val1 = parseInt(val11);
                  var val2 = parseInt(val12);

                  //sumo ambos nros y le paso el resultado al contenedor

                  var suma = val1 + val2;                    
                  $( "#resultado17" ).val( suma );
       });            
          
 });  
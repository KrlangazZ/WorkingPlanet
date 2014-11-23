$(document).ready(function sumar(){

      $('#sumar').click(function() {

               

                   //obtengo el contenido de las variables
                  var val1 = $('#val1').val();
                  var val2 = $('#val2').val();
                  var val3 = $('#val3').val();
                  var val4 = $('#val4').val();
                  var val5 = $('#val5').val();
                 /* var val6 = $('#val6').val();
                  var val7 = $('#val7').val();*/

                  //Convierto el Contenido en Nro Entero

                  var val1 = parseInt(val1);
                  var val2 = parseInt(val2);
                  var val3 = parseInt(val3);
                  var val4 = parseInt(val4);
                  var val5 = parseInt(val5);
                 /* var val6 = parseInt(val6);
                  var val7 = parseInt(val7);*/
                  

                  //sumo ambos nros y le paso el resultado al contenedor

                  var suma = val1 + val2 + val3 + val4 + val5 + val6 + val7;                    
                  $( "#resultado8" ).val( suma );
       });            
          
 });  
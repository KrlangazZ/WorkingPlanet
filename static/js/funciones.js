$(document).ready(function(){
 
 
 
   $('#val12').change(function(data){
                   
                   //envia las variables val1 y val2 via post con el value de los campos
                   //val 1 y val 2 cuando cambie el input val 2
                  var val11 = $('#val11').val();
                  var val12 = $('#val12').val();

                  var val1 = parseInt(val11);
                  var val2 = parseInt(val12);

                  var suma = val1 + val2;
                    
                   $( "#resultado17" ).val( suma );
                
       
 
 
      })
    
 });  
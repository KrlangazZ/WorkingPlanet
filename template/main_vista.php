<!DOCTYPE html>
<html lang="es">
<?php include ('validar_dia.php'); 
date_default_timezone_set("Chile/Continental");?>
<head>
	<meta charset="UTF-8"/>
	<title></title>
	<link rel="stylesheet" href="../static/css/estilos.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

	<header class="Header">    	
		     <h1 class="Header-title">Working Planet</h1>
				
	</header>

	<section class="Select">
		<select class="Select-name">
			<option>Seleccione un Nombre</option>
			<option>Cristian Quezada</option>
			<option>Claudia Oliva</option>
			<option>JCarlos Roa</option>
			<option>Dirk Ruttger</option>
			<option>Paul Manfield</option>
		</select>
		<select id="Select-mes" class="Select-mes">
			<option values="<?php echo date('n'); ?>">Seleccione Mes</option>
			<option value="1">Enero</option>
			<option value="2">Febrero</option>
			<option value="3">Marzo</option>
			<option value="4">Abril</option>
			<option value="5">Mayo</option>
			<option value="6">Junio</option>
			<option value="7">Julio</option>
			<option value="8">Agosto</option>
			<option value="9">Septiembre</option>
		    <option value="10">Octubre</option>
			<option value="11">Noviembre</option>
			<option value="12">Diciembre</option>
		</select>
        <?php $val_mes = ''; ?>
	</section>

	<section class="Timesheet">
		<h2>Time Sheet</h2>

		<form action="#" method="POST">

		<table class="Timesheet-table">

			<thead class="Timesheet-tableHead">

				<tr>
					<th># Proyecto</th>
					<th>Descripcion</th>
					<th></th>
					<th>Ingreso De Horas</th>

				</tr>

				<tr>
					<th>7</th>
					<th></th>
					<th></th>
					<th></th>
					<!-- Dias Del Mes -->
					
					

					 
					<th>Total Hrs</th>
					
				</tr>

				<tr>
					
					<th></th>
					<th>Nr Proy(0X-XXXX)</th>
					<th>#Tarea</th>
					<th>Nombre Proyecto / Tarea</th>
					<!-- Dias De la Semana -->
					<?php 


					$year = date("Y");
					$day = date('j');
					$mes = date('F');
					echo $day." / ".$mes." / ".$year." nro mes: ".date('n');

					$meses = array('Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic');
                    echo $meses[date('n')-1];
					$dias_semana = array('Lun','Mar','Mie','Jue','Vie','Sab','Dom');
                    echo $dias_semana[date('N')-1];


					for ($i=1; $i < 8; $i++) { 

						echo "<th>".$dias_semana[($i-1)]."</th>";
						
					} ?>


					
				</tr>
			
			</thead>

			<tbody class="Timesheet-tableBody">
                <?php foreach ($calendar as $days) : ?>
				<tr>
					<th>1</th>
					<th>99</th>
					<th>1</th>
					<th>Administracion</th>
					<?php
					
                     $acum_id=0;
					 for ($i=1; $i < 8; $i++) { 
                         $res = isset($days[$i]) ? $days[$i] : '';
                         $feriado = "";
                         
                         if($res && !(($i%6==0) || ($i%7==0))){
                         	
						echo "<td ".$feriado." > ".$res." <input id='val".$res."'class='Timesheet-tableInput' type='number' min='1' max='99'></td>";
					 }else{
					 	if(($i%6==0) || ($i%7==0)){
                         		$feriado = "class='Feriado'";
                         	}
					 	echo "<td ".$feriado." > ".$res." </td>";
					 }	
				} if($res && !(($i%6==0) || ($i%7==0))){?>
					<th ><input <?php echo "id='resultado".($acum_id++)."'"; ?> class='Timesheet-tableInput' type='text' disabled></th>
                  <?php }?>

                  <th></th>
                   
				</tr>
          <?php endforeach; ?>

				
			</tbody>



			<tfoot>


				
			</tfoot>

		</table>
		
		<input class="Timesheet-tableButton" id="sumar" type="button" value="Sumar" onclick="sumar()">

		</form>
	</section>

	<div class="Debug">
		<?php 

		
		echo $res;



		?>
	</div>

	<footer class="Footer">
		<p class="Footer-copyright"> CEEC Web Design Todos Los Derechos Reservados</p>
	    
	</footer>
	<script src="../static/js/jquery-2.1.1.js"></script>
	<script src="../static/js/funciones.js"></script>
</body>
</html>
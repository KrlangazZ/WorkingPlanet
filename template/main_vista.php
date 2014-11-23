<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<title></title>
	<link rel="stylesheet" href="../static/css/estilos.css">
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
		<select class="Select-mes">
			<option>Seleccione Mes</option>
			<option>Ene</option>
			<option>Feb</option>
			<option>Mar</option>
			<option>Abr</option>
			<option>May</option>
			<option>Jun</option>
			<option>Jul</option>
			<option>Ago</option>
			<option>Sep</option>
			<option>Oct</option>
			<option>Nov</option>
			<option>Dic</option>
		</select>
        
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
					<?php
					date_default_timezone_set("Chile/Continental");

					 for ($i=1; $i < 8; $i++) { 

						echo "<th>".$i."</th>";
						
					} ?>
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
                <?php for ($j=1; $j < 20; $j++) { ?>
				<tr>
					<th>1</th>
					<th>99</th>
					<th>1</th>
					<th>Administracion</th>
					<?php
					

					 for ($i=1; $i < 8; $i++) { 

						echo "<th ><input id='val".$j.$i."'class='Timesheet-tableInput' type='number' min='1' max='99'></th>";
						
					} ?>
					<th ><input <?php echo "id='resultado".$j.($i-1)."'"; ?> class='Timesheet-tableInput' type='text' disabled></th>

				</tr>
            <?php } ?>

				
			</tbody>



			<tfoot>
				
			</tfoot>

		</table>
		
		<input class="Timesheet-tableButton" id="sumar" type="button" value="Sumar" onclick="sumar()">

		</form>
	</section>

	<footer class="Footer">
		<p class="Footer-copyright"> CEEC Web Design Todos Los Derechos Reservados</p>
	    
	</footer>
	<script src="../static/js/jquery-2.1.1.js"></script>
	<script src="../static/js/funciones.js"></script>
</body>
</html>
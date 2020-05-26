<!DOCTYPE html>
<html>
<head>
	<title>Formulario de Gestion de especialidades</title>
	<link rel="stylesheet" type="text/css" href="estiloEspecialidad.css">
	<script LANGUAGE='javascript' type="text/javascript">
		function eliminar()
		{
			if(confirm('¿Confirma la baja?'))
				document.formGestion.Esp.submit()
		}
	</script>
</head>
<body>
	<form id="formGestionEsp" name="formGestionEsp" method="post" action="gestionBase.php" enctype="multipart/form-data">
		<p class="Gestion de especialidades"</p><br>

			<?php
			include "conectar.php"
			$vCveEsp=$_POST['cveEspe'];
			$resConectar=conectar();
			$sqlEspe="SELECT cveEsp, nomEsp, nomArea FROM ESPECIALIDAD, AREA WHERE cveEsp='$vCveEspe" AND ESPECIALIDAD.cveArea=AREA.cveArea;*;
			$tablaEspe= mysql_query($sqlEspe);
			$numfilasEspe= mysql_num_rows($tablaEspe);
			if ($numfilasEspe>0) {
				$filaEspe=mysql_fetch_array($tablaEspe);
				echo'<label for="clave">',"CLAVE:".'</label>';
				echo '<input name="cveEspecialidad" type="text" id="claveEspecialidad" READONLY="readonly" value='.$filaEspe['cveEsp'],'><br>';
				echo'<label for="nombre">',"NOMBRE:".'</label>';
				echo '<input name="nomEspecialidad" type="text" id="nombreEspecialidad" READONLY="readonly" value='.$filaEspe['nomEsp'],'><br>';
				echo'<label for="area">',"AREA:".'</label>';
				echo '<input name="nomArea" type="text" id="nombreArea" READONLY="readonly" value='.$filaEspe['nomArea'],'><br>';
			}
				echo '<input type="button" name="botonG" id="botonG" value="Eliminar" onclick="eliminar();"/>';
				echo '<input type="submit" name="botonG" id="botonModificar" value="modificar"/><br/>';

				?>
	</form>
	<br>
	<img src="/imagEscuela/regresar.gif" width="60" height="40" onclick="history.back()"/>

</body>
</html>
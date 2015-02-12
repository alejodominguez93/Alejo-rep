<?php 
	include 'includes/conexionserv.php'; //INCLUYO ARCHIVO DE CONEXIÓN
	$query = "SELECT * FROM cursos ORDER BY idCurso ASC";
	$resultQuery = mysqli_query($con,$query);
?>
<!DOCTYPE <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action = "consulta_materias.php" method="post">
<select name ="curso">
	<?php 
	while($row = mysqli_fetch_array($resultQuery)){
		echo "<option value = ' ".$row['idCurso']."'>".$row['nombreCur']."</option>";
		
	}
	?>
</select>
<input type="submit" value="Enviar"/>
</form>
</body>
</html>
<?php
include 'includes/conexionserv.php';
$idCurso = $_POST['curso'];
$idEstudiante =$_POST['estudiante'];
$query = "SELECT * FROM estudiantes 
			INNER JOIN notas_estudiantes ON estudiantes.idEstudiante = notas_estudiantes.idEstudiante
			INNER JOIN notas             ON notas.idNotas             = notas_estudiantes.idNota
			INNER JOIN cursos          ON cursos.idCurso       = notas_estudiantes.idCurso WHERE cursos.idCurso=$idCurso AND estudiantes.idEstudiante=$idEstudiante";
$resultQuery = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Notas</title>
</head>
<body>
<table border="1">

<tr>
<td>Ejercicio</td>
<td>Nota</td> 
<td>Porcentaje Nota</td>
<td>Sumatoria</td>
</tr>
<?php
$incremento = 0;
$nombreEstu;
while($row= mysqli_fetch_array($resultQuery)){
	$nombre = $row['nombreEst'];
	$nombreDelCurso = $row['nombreCur'];
	echo"<tr>
<td>".$row['nombreNo']."</td>
<td>".$row['valor']."</td>
<td>".$row['porcentaje']."</td>
<td>".$row['valor']*$row['porcentaje']."</td>
	</tr>";
$incremento ++;
$lasNotas[$incremento]=$row['valor']*$row['porcentaje'];
}
?>


</table>
<?php
echo $nombreDelCurso.":";
echo $lasNotas[1]+$lasNotas[2]+$lasNotas[3]+$lasNotas[4];
?>
</body>
</html>
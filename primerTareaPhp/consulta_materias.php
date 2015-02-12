<?php 
include 'includes/conexionserv.php';
		$idCurso=$_POST['curso'];
        $query= "SELECT ec.idEstudiante, e.nombreEst, e.codigoEst FROM estudiantes_cursos AS ec, estudiantes AS e WHERE ec.idEstudiante=e.idEstudiante AND ec.idCurso=".$idCurso;
        $resultQuery= mysqli_query($con,$query);

		while ($row = mysqli_fetch_array($resultQuery)) {
			echo "  
				<form action='consulta_notas.php' method='post'>
					<select name='estudiante'>
						<option value='".$row['idEstudiante']."'>".$row['nombreEst'] ."</option>
					</select>"

					." ".
					$row["codigoEst"]
					." ".

				
					"<select name='curso'>
						<option value='".$idCurso."'></option>
					</select>"
					
					." ".
					
					"<input type='submit' value='Ver notas'>
				</form>
			"
			;
 		}
			
 ?>
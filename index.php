<!DOCTYPE html>
<html lang="fr">

	<head>
			<title>Gestion de Projets</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

			<link rel="icon" type="image/x-icon" href="img/favicon.png"/>
			<link rel="stylesheet" href="dist/css/bootstrap.css" type="text/css" media="screen"/> 
			<link rel="stylesheet" href="gs.css" type="text/css" media="screen"/> 
	</head>

	<body>
	
		<div id="bloc_central">
		
		<a href="nouveau.php"><button class="btn btn-success btn-lg" type="submit">Lancer un nouveau projet</button></a>	<br/><br/>		
		<a href="resume.php"><button class="btn btn-primary btn-lg" name="existant" type="submit">Travailler sur un projet existant</button></a>			

		</div>		
	
	<?php
		if(isset($_POST['existant']))
		{
			$sql = "";
								
			mysql_query($sql);	
			header('Location: ??????????');	
		}
	?> 
	
	</body>

</html>
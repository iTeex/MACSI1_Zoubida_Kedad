<!DOCTYPE html>
<html lang="fr">

	<head>
			<title>Nouveau Projet - Nom</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

			<link rel="icon" type="image/x-icon" href="img/favicon.png"/>
			<link rel="stylesheet" href="dist/css/bootstrap.css" type="text/css" media="screen"/> 
			<link rel="stylesheet" href="gs.css" type="text/css" media="screen"/> 
	</head>

	<body>
	
		<div id="bloc_central">
		
		<form method="POST">
			<label for="intituleProjet">Entrez le nom du projet &agrave; cr&eacute;er</label>
    		<input type="title" class="form-control" id="intituleProjet" placeholder="Nom du projet"> <br/>
			<button class="btn btn-success btn-lg" name="nouveau" type="submit">Valider</button>
		</form>	<br/><br/>		
			<a href="index.php"><button class="btn btn-primary btn-lg" type="submit">Pr&eacutec&eacutedent</button></a>			
		
		</div>		
	
	<?php
		if(isset($_POST['nouveau']))
		{
			$sql = "";
								
			mysql_query($sql);	
			header('Location: ??????????');	
		}
	?> 
	
	</body>

</html>
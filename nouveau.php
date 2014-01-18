<!DOCTYPE html>
<html lang="fr">

	<head>
			<title>Nouveau Projet - Nom</title>
			<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>

			<link rel="icon" type="image/x-icon" href="img/favicon.png"/>
			<link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen"/> 
	</head>

	<body>
	
		<div id="bloc_central">
		
		<form method="POST">
			<label for="intituleProjet">Entrez le nom du projet &agrave; cr&eacute;er</label>
    		<input type="title" class="form-control" id="intituleProjet" placeholder="Nom du projet"> <br/>
			<button class="btn btn-success" name="nouveau" type="submit">
				<span class="glyphicon glyphicon-ok"></span>     Valider
			</button>
		</form>
		<br/><br/>		
		<a href="index.php">
			<button class="btn btn-primary" type="submit">
				<span class="glyphicon glyphicon-fast-backward"></span>     Pr&eacutec&eacutedent
			</button>
		</a>			
		
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
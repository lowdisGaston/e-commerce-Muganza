!doctype html public "-//W3C//DTD HTML 4.0 //EN">

<!Doctype html>
<html>
<head>
	<title>categorie</title>
	<meta charset="UTF-8"/>
	<style>
	header{
		background-color: rgb(0,0,255);
		margin-top: -16px;
		position: fixed;
		width: 1510px;
	}
	
	div{
		background-color: blue;
	
	}
	#centre{
		background-color: white;
	
	}
	
	ul{
		margin: 0;
		padding: 0;
	}
	nav{
		list-style: none;
		padding: 0;
		margin: 0;
		background-color: red;
	}
	nav  li{
		display: inline-block;
		vertical-align: top;
		width: 200px;
		height: 40px;
		margin: 0 -5px 0 0;
	}
	nav li  a{
		display: block;
		color: #fff;
		text-decoration: none;
		font-family: "Century Gothic","Helvetica Neue",Helvetica;
		font-weight: bold;
		width: inherit;
		height: inherit;
		text-align: center;
		line-height: 40px;
	}
	nav li:hover a{
		background-color: rgb(195,195,195);
		color: black;
	}


	h1{
		text-align: center;
	}
	#gauche,#centre,#droite{
		display: inline-block;		
	}
	#gauche{			
		width: 20%;
		height: 540px;
		margin-top: 170px;	
		position: fixed;	
	}
	#centre{		
		width: 58%;
		height: 540px;	
		margin-top: 170px;
		margin-left: 310px;	
		position: fixed;		
		}
	#droite{		
		width: 40%;
		height: 550px;
		position: fixed;
		margin-top: 170px;	
		margin-left: 1205px;							
	}
	#list{
		margin-top: -15px;
		width: 100%;
		height: 450px;		
	}	
	footer{
		background-color: black;
		height: 80px;
		position: fixed;
		width: 1510px;
		color: white;
		font-family: "Century Gothic","Helvetica Neue",Helvetica;
		text-align: center;
		margin-top: 708px;
	}
	label{
		font-family: Century Gothic;				
	}
	legend{		
		font-family: "Century Gothic","Helvetica Neue",Helvetica;
		font-weight: bold;		
		font-size: 20px;
	
	}
	
	fieldset{
		border: 1px solid black;				
	}
	.enreg{
		border-style: none;
		height: 30px;		
		background-color: blue;
		font-size: 15px;
		color: white;
		font-weight: normal;
		font-family: "Century Gothic","Helvetica Neue",Helvetica;
	}
	.eff{
		border-style: none;
		height: 30px;		
		background-color: red;
		font-size: 15px;
		color: white;		
		font-weight: normal;
		font-family: "Century Gothic","Helvetica Neue",Helvetica;
	}
	#list h3{
		text-align: center;
		color: black;
		font-family: Broadway;		
	}	
	
	#list table th{
		border: 1px solid black;
	}
	.tab th{
		border: 1px solid black;
		width: 200px;
		color: white;
		background-color: black;
		font-family: "Century Gothic","Helvetica Neue",Helvetica;
	}
	.tab{
		margin-top: -35px;
		text-align: center;
	}
	.tab td{
		text-align: center;
		font-family: "Century Gothic","Helvetica Neue",Helvetica;
		border: 1px solid black;
	}
	input{			
		font-family: "Century Gothic","Helvetica Neue",Helvetica;		
		font-weight: bold;width: 200px
	}
	.enreg{
		border-style: none;
		height: 30px;		
		background-color: blue;
		font-size: 15px;
		color: white;
		font-weight: normal;
		font-family: "Century Gothic","Helvetica Neue",Helvetica;
	}
	.eff{
		border-style: none;
		height: 30px;		
		background-color: red;
		font-size: 15px;
		color: white;
		width: 100px;
		font-weight: normal;
		font-family: "Century Gothic","Helvetica Neue",Helvetica;
	}

	</style>
</head>
<body>
	Bienvenue au site de e-commerce réaliser par Gaston
	<header>
		
		<h1><img src="images/Tpim.png"/></h1>
			<nav>
			<ul>
		     	<li>             </li>
				<li><a href="classe.php" >CLASSE</a></li>
				<li><a href="inscrire.php">INSCRIPTION</a></li>				
				<li><a href="paiement.php">PAIEMENT</a></li>
				
			</ul>
		</nav>
	</header>
	
	<div id="centre" class="centre">
	
		<form method="POST" action="ajouterPaiement.php">
			<fieldset style="width:400px;">
				<legend>Remplir le formulaire de paiement de frais</legend>
			<table>
				<tr>
					<td><label>Matricule de l'élève</label></td>
					<td><input type="text" name="MatEl"></td>
					
					
				</tr>

				<tr>
					<td><label>Nom</label></td>
					<td><input type="text" name="Nom"/></td>
					
				</tr>
				<tr>
					<td><label>Post nom</label></td>
					<td><input type="text" name="postnom"/></td>
				</tr>

				<tr>
					<td><label>Prénom</label></td>
					<td><input type="text" name="Prenom"/></td>
				</tr>

				<tr>
					<td><label>Classe</label></td>
					<td><input type="text" name="classe"/></td>

				</tr>
				<tr>
					<td><label>Montant à payer</label></td>
					<td><input type="text" name="Montant"/></td>
				</tr>

<tr>
					<td><label>Motif</label></td>
					<td><input type="text" name="Motif"/></td>
				</tr>
				<tr>
					<td><label>Date de Paiement</label></td>
					<td><input type="text" name="dateP"/></td>
				</tr>
<tr>
				
					<td><input type="Submit" value="Enregistrer" class="enreg" style="font-size:20px;width:200px;height:35px;"></td>
					<td><input type="reset" value="Effacer" class="eff" style="font-size:20px;width:200px;height:35px;"></td>
				
				</tr>
			</table>
			</fieldset>
		</form>

		<?php
		if (isset($_POST["MatEl"]) and isset($_POST["Nom"]) ) {
			if ($_POST["MatEl"] != NULL and $_POST["Nom"] != NULL ) {
				$MatEl= $_POST["MatEl"];
				$Nom= $_POST["Nom"];
				$postnom= $_POST["postnom"];
				$Prenom= $_POST["Prenom"];
				$classe= $_POST["classe"];
				$Motif= $_POST["Motif"];
				$dateP1= $_POST["dateP"];
				$Montant= $_POST["Montant"];

			
			$conn= new PDO("mysql:host=localhost;dbname=dbtp","root","");
				
				$req="insert into paiement values(NULL,'$MatEl','$Nom','$postnom','$Prenom','$classe','$Montant','$Motif','$dateP1')";
	$conn->exec($req);
	echo "un enregistrement vient d'etre effectuer";
			}
			else{
				echo "<script>alert('Pas enregistrement')</script>";
			}
		}
		
		//affichage


		?>	


	</div>	
	
<div id="gauche" class="gauche">
	<form method="POST" action="ajouterPaiement.php">
			<fieldset>
				<legend>PAIEMENT DE FRAIS SCOLAIRE</legend>
				<table>
			
				<tr>
					<td><a href="ajouterPaiement.php" style="font-size:15px;color:white;text-decoration:none;">EFFECTUER UN PAIEMENT</a></td>
				
				</tr>

				<tr>
					<td><a href="listePaie.php" style="font-size:15px;color:white;text-decoration:none;">AFFICHER LA LISTE</a></td>
				</tr>
			

			</table>
				</fieldset>
		</form>	
</body>
</html>

<?php

//ceci est un commentaire sur une seule ligne qui ne sera pas interprete
/*
ceci est un commentaire sur plusieurs lignes qui ne sera pas interprete
les commentaires sont utilises quand on veut expliquer ce que fait l'algorithme
qui est code ici
*/


printLn("Bonjour !"); //va afficher Bonjour !

$prenom = "Jean"; //creation d'une variable prenom ayant comme valeur Jean
$nom = "Dupont"; //creation d'une variable nom ayant comme valeur Dupont


/*
affichage de Bonjour je m'appelle Jean Dupont et nous sommes le <date du jour>
on affiche un texte fixe entre des "" et on utilise . pour concatener du texte
avec des variables. Il est également possible de concatener directement le retour
d'une fonction comme ici avec la fonction native de php date
*/
printLn("Bonjour je m'appelle ".$prenom." ".$nom." et nous sommes le ".date('d/m/Y'));

$table = 5;
if(isset($_GET['table'])){
	if(is_numeric($_GET['table'])){
		$table = $_GET['table'];
	}
	else{
		printLn("le parametre table doit être un nombre entier");
	}
	
}

table($table);

//declaration de la fonction printLn
function printLn($txt){
	echo $txt."<br />"; //affiche <br /> qui en html permet de revenir a la ligne
}

function table($table){
	for($i=0;$i<=10;$i++){
		printLn($table."*".$i." = ".($i * $table));
	}
}

?>

<html>
	<head>
		<title>Mon premier code php</title>
	</head>
	<body>
		<form method="GET">
			<label for="table">Choisir votre table</label>
			<input type="text" name="table" />
			<input type="submit" />
		</form>
	</body>
</html>
<?php

function table($table){
	for($i=0;$i<=10;$i++){
		printLn($table."*".$i." = ".($i * $table));
	}
}

/*
une fonction iterative est une fonction qui se lit de bas en haut
(modulo les boucles)
*/
function factorielleIterative($nombre){
	$res = 1;
	for($i=1;$i<=$nombre;$i++){
		$res = $res * $i;
		//ou $res *= $i;
	}
	return $res;
}

/*
une fonction recursive est une fonction qui s'appelle elle meme
souvent le programmation recursive apporte de la lisibilite au code
exemple pour factoriel de 4

	1. fact(4) = 4 * fact(3)
	2.               fact(3) = 3 * fact(2)
	3.			       fact(2) = 2 * fact(1)
	4.                                           fact(1) = 1
        5.                             fact(2) = 2 *1 = 2
        6.               fact(3) = 3 * 2 = 6
        7. fact(4) = 4 * 6 = 24

*/

function factorielleRecursive($nombre){
	if($nombre === 1){
		return 1;
	}
	return $nombre * factorielleRecursive($nombre -1);
}

?>
<h1> Exercice 2 </h1>

<p> A partir de la phrase de l’exercice 1, écrire l’instruction permettant de compter le nombre de mots 
contenus dans celle-ci. </p>

<h2> Résultat  exo 2</h2>

<?php

// Compter nombre de mots = fonction str_word_count()

$phrase = "Notre formation DL commence aujourd'hui";
$nbMots = str_word_count($phrase);

echo "La phrase contient $nbMots mots<br>";

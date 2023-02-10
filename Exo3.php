<h1> Exercice 3 </h1>

<p>A partir de la phrase de l’exercice 1, écrire l’instruction permettant de remplacer le mot 
« aujourd’hui » par le mot « demain ». Afficher l’ancienne et la nouvelle phrase.</p>

<h2> Résultat </h2>

<?php

// Remplacer un mot = fonction str_replace("motaremplacer", "motquiremplace", $varphrase)

$phrase = "Notre formation DL commence aujourd'hui.";
$phrase = str_replace("aujourd'hui", "demain", $phrase);

echo $phrase;


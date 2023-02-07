<h1> Exercice 12 </h1>

<p> A partir d’une fonction personnalisée et à partir d’un tableau de prénoms et de langue associée 
(tableau contenant clé et valeur), dire bonjour aux différentes personnes dans leur langue 
respective (français ➔ « Salut », anglais ➔ « Hello », espagnol ➔ « Hola »)
Exemple : tableau ➔ Mickaël -> FRA, Virgile -> ESP, Marie-Claire -> ENG
</p>

<h2> Résultat </h2>

<?php

$tableau = array(
    "Mickael" => "Bonjour",
    "Marie-Claire" => "Hello",
    "Virgile" => "Hola",
    
);


foreach($tableau as $clef => $valeur) {
    echo ($valeur);
    echo " $clef <br/>";
}
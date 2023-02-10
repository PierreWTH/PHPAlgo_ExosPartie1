<h1> Exercice 7 </h1>

<p>Ecrire un algorithme permettant de renvoyer la catégorie d’un enfant en fonction de son âge :
Poussin : entre 6 et 7 ans
Pupille : entre 8 et 9 ans
Minime : entre 10 et 11 ans
Cadet : à partir de 12 ans
Si la catégorie n’est pas gérée, merci de le préciser. </p>

<h2> Résultat </h2>

<?php

$ageenfant = 9;

// Poussin

if ($ageenfant >= 6 && $ageenfant <= 7)
{
    echo "Un enfant de $ageenfant ans fait partie de la catégorie poussin. ";
}

// Pupille

elseif ($ageenfant >= 8 && $ageenfant <= 9)
{
    echo "Un enfant de $ageenfant ans fait partie de la catégorie pupille. ";
}

// Minime

elseif ($ageenfant >= 10 && $ageenfant <= 11 )
{
    echo "Un enfant de $ageenfant ans fait partie de la catégorie minime. ";
}

// Cadet

elseif ($ageenfant >= 12 )
{
    echo "Un enfant de $ageenfant ans fait partie de la catégorie Cadet. ";
}

// Catégorie pas gérée

else 
{
    echo "La catégorie pour un enfant de $ageenfant ans n'est pas gérée. ";
}

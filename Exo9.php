<h1> Exercice 9 </h1>

<p> Nous souhaitons savoir si une personne est imposable en fonction de son âge et de son sexe.
Si la personne est une femme dont l’âge est compris entre 18 et 35 ans ou si c’est un homme de 
plus de 20 ans, alors celle-ci est imposable (sinon ce n’est pas le cas, « non imposable »).
</p>

<h2> Résultat </h2>

<?php

$age = 23;
$sexe = "M";

echo "Age : $age <br/>";
echo "Sexe : $sexe <br/>";

// Si F et entre 18 et 35 ans

if ($sexe == "F" && $age >= 18 && $age <= 35)
{
echo "la personne est imposable";
}

// Si M et + de 20 ans

elseif ($sexe == "M" && $age >= 20)
{
echo "La personne est imposable";
}

// Si ne corresponds a aucun des deux

else
{
echo "La personne n'est pas imposable";
}

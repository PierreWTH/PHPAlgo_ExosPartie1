<h1> Exercice 10 </h1>

<p> A partir d’un montant à payer et d’une somme versée pour régler un achat, écrire l’algorithme qui 
affiche à un utilisateur un rendu de monnaie en nombre de billets de 10 € et 5 €, de pièces de 2 € et 
1 €
</p>

<h2> Résultat </h2>

<?php



$montantaddition = 150;
$montantverse = 200;
$resteapayer = ($montantverse % $montantaddition);

echo "Montant de l'addition : $montantaddition <br/>";
echo "Montant versé : $montantverse <br/>";
echo "Reste à payer : $resteapayer <br/>";

// Nombre de billets de 10 dans le reste a payer

$Billet10 = (int) ($resteapayer / 10);
$resteapayer = ($resteapayer - $Billet10*10);

// Nombre de billets de 5 dans le nouveau reste a payer 

$Billet5 = (int) ($resteapayer / 5);
$resteapayer = ($resteapayer - $Billet5*5);

// Nombre de pièces de 2 dans le nouveau reste a payer 

$Piece2 = (int) ($resteapayer / 2);
$resteapayer = ($resteapayer - $Piece2*2);

// Nombre de pièces de 1 dans le nouveau reste a payer 

$Piece1 = $Piece1 = (int) ($resteapayer / 1);
$resteapayer = ($resteapayer - $Piece1*1);

if ($resteapayer == 0);{
    
    echo "$Billet10 billet de 10 - $Billet5 billets de 5 - $Piece2 pièces de 2 - $Piece1 pièce de 1. ";
}

?>
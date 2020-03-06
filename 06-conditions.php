<?php
// nous stockons les secondes récupérées par la fonction date qui a comme argument le "s", il représente les secondes de l'heure de votre machine ()
$secondes = date("s");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
</head>
<body>
<h1>les conditions</h1>
<p>les conditions permettent de tester différents cas de figure, c'est la base de la programmation.
une condition qui est toujours vraie ou toujours fausse est une condition inutile!</p>
<h2>Si - if</h2>
<p>condition qui va vérifier si ce qui est passé en paramètre vaut true (vrai) ou false (faux)</p>
<p>on va vérifier si le numérique $secondes générer par <a href="https://www.php.net/manual/fr/function.date.php" target="_blank">date()</a> est impaire</p>
<?php
// on vérifie si la division de nos secondes par 2 nous donne une reste (true) % est modulo, sinon il envoie 0, ce qui correspond à false
if ($secondes%2){
    echo "<p>$secondes est un nombre impaire</p>";
}


// autre manière de faire la même chose sans modulo

// secondes est au format texte, PHP a converti automatiquement celui-ci en int pour le modulo
var_dump($secondes);

// autre manière de faire la même chose sans modulo, en utilisant ici is_int () => vérifie si le résultat est un numérique à virgule flottante, le "!" inverse la réponse si c'est vrai => faux, si faux => vrai
if(!is_float($secondes/2)){
    echo "<p>$secondes est un nombre impair</p>";
}

// autre manière de faire la même chose sans modulo, en utilisant ici is_int () => vérifie si le résultat est un numérique à virgule flottante, le "!" inverse la réponse si c'est vrai => faux, si faux => vrai
if(is_int($secondes/2)){
    echo "<p>$secondes est un nombre impair</p>";
}

?>


<h2>SINON else</h2>
<p>le sinon est appelé si la condition if auquel il est rattaché vaut false</p>
<?php
if ($secondes%2){
    echo "<p>SI== true $secondes est un chiffre impair</p>";
    //SINON
}else {
    echo "<p>SI== false => SINON | $secondes est un chiffre pair</p>";
}
?>

<?php
// on stocke des données de types différents dans un tableau indexé (clef automatiques commençant à 0)
$donnees = [3,
    5.12,
    "coucou",
    true,
    ["you"],
    false,
    null,
    ];
?>
<p> on prend au hasard une clef du tableau grâce à la fonction <a href="https://www.php.net/manual/fr/function.array-rand.php" target="_blank">array_rand()</a></p>


<pre><?php var_dump($donnees);?></pre>


<h2>SINON SI else if elseif</h2>
<p>Si ce que l'on doit vérifier n'est pas une condition binaire (vrai/faux), on peut utiliser le else if (association du elseet du if) ou son raccourci : elseif</p>



<?php
//clef au hasard du tableau $donnees
echo $randomKey = array_rand($donnees);
// on récupère la valeur qui est dans le tableau $donnees grâce à la clef
$values = $donnees[$randomKey];

// si nombre à virgule

if(is_float($values)){
    echo "$values est un float";
}else if (is_int($values)){
    echo "$values est un entier";
 }elseif (is_string($values)){
    echo "$values est une chaine de caractère";
}else if(is_bool($values)){
    // si c'est un booléen vrai (true), on auraot pu l'écrire if ($values==true)
    if($values){
        echo "true est un booléen vrai";
    }else{
        echo "false est un booléen faux";
    }
}elseif (is_array($values)){
    echo "c'est un tableau";
// le esle final représente la valeur par défaut si toutes les conditions précédentes sont à false, ici nous avous que NULL
}else{
    echo "$values vaut null";
}
?>


</body>
</html>
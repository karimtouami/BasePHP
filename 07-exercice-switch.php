<?php
$tab=[
    1 => [
        'titre'=>"Huit cas de coronavirus en Belgique : la situation suivie «pas à pas», «sans exagération mais sans minimiser non plus» (direct)",
        'texte'=>"Six nouveaux cas de coronavirus ont été détectés en Belgique, a annoncé lundi la ministre fédérale de la Santé Maggie De Block (Open Vld) à l’issue d’un comité de concertation consacré à l’épidémie. Avec la personne testée positive dimanche et celle revenue de Wuhan, en Chine, il y a quelques semaines et guérie depuis, cela porte à huit le nombre total de cas avérés depuis le début de l’épidémie mondiale.",],
    2 =>[
        'titre'=>"Météo: alerte aux conditions glissantes ce mardi matin, verglas et pluie",
        'texte'=>"L’après-midi de lundi sera nuageuse, marquée par des pluies intermittentes ou quelques averses, éventuellement accompagnées de grésil et d’un coup de tonnerre. Si le temps deviendra plus sec en cours de nuit, l’Institut royal météorologique publie pour la nuit une alerte jaune aux conditions glissantes dans tout le pays sauf à la Côte. L’alerte commence ce lundi soir à minuit et se termine ce mardi à 11h.",],
    3 =>[
        'titre'=>"Judo: Matthias Casse forfait à Rabat",
        'texte'=>"Matthias Casse, qui devait disputer ce week-end le Grand Prix de Rabat un mois après sa victoire au prestigieux Tournoi de Paris, fera finalement l’impasse sur l’épreuve marocaine. L’Anversois, qui souffre légèrement du genou, sera maintenu au repos pour ne pas prendre le moindre risque. Nº2 mondial et nº1 au ranking olympique (qui sert pour la qualification pour les JO de Tokyo) dans la catégorie des moins de 81 kg, il est déjà assuré de sa place aux Jeux et, en accord avec son staff, a décidé de reporter sa rentrée.

« Nous n’avons pas décidé si Matthias disputera encore une compétition avant l’Euro de Prague (1-3 mai) », indique Koen Sleeckx, le directeur technique de la Fédération flamande.

Toma Nikiforov, lui, sera bien présent à Rabat. Pour le Schaerbeekois, champion d’Europe 2018 en moins de 100 kg, ce sera le grand retour aux affaires après plus de 8 mois d’absence dus à deux opérations successives pour renforcer ses épaules. Ce sera aussi, pour lui, le début d’un sacré contre-la-montre pour décrocher les points nécessaires pour se qualifier pour Tokyo.",],
    4=>[
        'titre'=>"Boxe: Anthony Joshua affrontera Kubrat Pulev le 20 juin au Tottenham Stadium",
        'texte'=>"Le boxeur britannique Anthony Joshua a confirmé lundi qu’il défendrait ses titres WBA-IBF-WBO des poids lourds face au Bulgare Kubrat Pulev le 20 juin à Londres, éloignant la perspective d’un combat de réunification.

« 20 juin », a posté sur son compte Twitter le Britannique de 30 ans, avec une photo de lui décoré de ses trois ceintures mondiales reconquises lors de sa victoire aux points sur Andy Ruiz en décembre en Arabie saoudite.",
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercice Switch</title>
</head>
<body>
<p> Pages
    <a href="?id=1">1</a> | <a href="?id=2">2</a> | <a href="?id=3">3</a> |
    <a href="?id=4">4</a>
</p>
<?php
if(isset($_GET['id'])){
    $id= $_GET['id'];
}else{
    $id = 1;
}

switch ($id){
    case 1 :
        echo "<h3>";
        echo $tab[1]["titre"];
        echo "</h3>";
        echo "<p>";
        echo $tab[1]["texte"];
        echo "</p>";
        break;
    case 2 :
        echo "<h3>";
        echo $tab[2]["titre"];
        echo "</h3>";
        echo "<p>";
        echo $tab[2]["texte"];
        echo "</p>";
        break;
    case 3 :
        echo "<h3>";
        echo $tab[3]["titre"];
        echo "</h3>";
        echo "<p>";
        echo $tab[3]["texte"];
        echo "</p>";
        break;
    case 4 :
        echo "<h3>";
        echo $tab[4]["titre"];
        echo "</h3>";
        echo "<p>";
        echo $tab[4]["texte"];
        echo "</p>";
        break;
}

?>
<pre>
    <?php
    print_r($id);
    ?></pre>
</body>

</html>

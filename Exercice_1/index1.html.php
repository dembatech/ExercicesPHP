

<link rel="stylesheet" href="/avec_include/design_communs/style.css">

<?php include("../design_communs/design.php"); ?>
<?php include("../design_communs/suivant.php"); ?>
    


<div class="Resultat">
    <P>Exercice 1</P>
</div>


<div class="ouverture">
    <?php

    //Charge mes fonctions ou inclure
    include_once("fonctions.php");

    const VAL_MIN=1;
    define("VAL_MAX",100);
    //Generer un nbre de maniere 
    //aleatoire entre 1 et 100
    $cote=rand(VAL_MIN,VAL_MAX) ;
    echo "Le Cote est ".  $cote."<br>";
    calculCarre($cote);
    $peri=perimetre($cote);
    echo "Le Perimetre est ". $peri."<br>";?>
</div>

<div class="suivant">
    <button><a href="/avec_include/Exercice_2/index2.html.php">suivant</a></button> 
       
    




</body>


</html>
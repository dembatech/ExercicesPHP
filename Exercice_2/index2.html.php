<link rel="stylesheet" href="/avec_include/design_communs/style.css">

<?php include("../design_communs/design.php"); ?>
    
    <div class="Resultat">
        <P>Exercice 2</P>
    </div>
    <div class="ouverture">
        <?php
        include_once('fonctions.php');
        $m=rand(1,100);
        $n=rand(1,100);
        echo $m.'<br>';
        echo $n.'<br>';
             
        perimetre($m,$n);
        
        ?>
    </div>
    <div class="precedent">
    <button><a href="/avec_include/Exercice_1/index1.html.php">Precedent</a><button></button> 
       
    </div>

    <div class="suivant">
    <button><a href="/avec_include/Exercice_3/index.html.php">suivant</a></button> 
       
    </div>
    
</body>


</html>
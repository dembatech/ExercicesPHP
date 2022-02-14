

<link rel="stylesheet" href="/avec_include/design_communs/style.css">

<?php include("../design_communs/design.php"); ?>
    


<div class="Resultat">
    <P>Exercice 4</P>
</div>



<div class="ouverture">
   
<?php
  
  include_once("fonctions.php");
  $m=rand(1,100);
  $n=rand(1,100);
  echo "avant permutation <br/>";
  echo"n= " .$n.'<br>';
  echo"m= " .$m.'<br>';
  permutation($m,$n);

?>
<div class="precedent">
    <button><a href="/avec_include/Exercice_3/index.html.php">Precedent</a></button> 
       
    </div>

    <div class="suivant">
    <button><a href="/avec_include/Exercice_5/index.html.php">suivant</a></button> 
       
    </div>


</div>
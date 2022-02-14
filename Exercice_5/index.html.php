<link rel="stylesheet" href="/avec_include/design_communs/style.css">

<?php include("../design_communs/design.php"); ?>
    


<div class="Resultat">
    <P>Exercice 5</P>
</div>



<div class="ouverture">
   
<?php
  include_once("fonctions.php");
  echo("les deux points sont:a et b <br>");
   $xa=rand(1,100);
   $xb=rand(1,100);
   $ya=rand(1,100);
   $yb=rand(1,100);
   echo"les coordonnes de a sont ".$xa." et ".$ya."<br>";
   echo"les coordonnes de b sont ".$xb." et ".$yb."<br>";
   
   distance($xa,$xb,$ya,$yb);
?>
    
    <div class="precedent">
    <button><a href="/avec_include/Exercice_4/index.html.php">Precedent</a></button> 
       
    </div>
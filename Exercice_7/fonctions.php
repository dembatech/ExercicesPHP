<?php
function bissextile($annee):bool{
	if( (($annee%4==0) && !($annee%100)) || ($annee%400==0)) {
		
	}else{
        return FALSE;
    }
}
function nbrjours($mois,$anne):int{
    if (($mois<1) || ($mois>12)) {
        $nbrjours=0 ;
        
    } 
     else{
           if ($mois==2){
              if (bissextile==true){
                $nbrjours==29;
             } 
              else{
                $nbrjours==28;
            }
             
              if (($mois==12) && ($nbrjours==31)) 
                 ($annee==$annee+1); 
                 ($nbrjours==1);
                 
                    # code...
                }
           }   
 else{
               if(($mois==5)) || ((mois==7)) || (($mois==10))

               
           }
    }


?>
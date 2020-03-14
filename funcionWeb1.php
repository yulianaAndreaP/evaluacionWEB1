<?php


function calcularEdad($nacimiento){
    $edad=(2020-$nacimiento);
    echo ("<br>");
    echo("Si nacio $nacimiento usted tiene:  " .$edad);
}

function calcularEdad2($nacimiento,$actual){
    $edad=$actual-$nacimiento;
    echo("Si nacio $nacimiento usted tiene:  " .$edad);
    
}

function calcularEdad3($nacimiento,$actual){
    $edad=$actual-$nacimiento;
    echo("Si nacio $nacimiento usted tiene:  " .$edad);
   
    
}   

function calcularEstatura($estatura){
    if  ($estatura<1.70)
    {
        echo "Para una altura de $estatura su biotipo es: Biotipo Bajo<br>";
              
    }
    elseif ($estatura>=1.70 && $estatura<1.80)
    {
        echo "Para una altura de $estatura su biotipo es: Biotipo Promedio<br>";
        
    }
   else
   {
    echo "Para una altura de $estatura su biotipo es: Biotipo Superior<br>";
    return $estatura;
   }
   

  
}
function edad($nacimiento,$actual){
    $edad=$actual-$nacimiento;
    return ($edad);
   
    
} 

function Estatura($Estatura){
    if  ($Estatura<1.70)
    {
        return ("Su Biotipo es bajo<br>");
              
    }
    elseif ($Estatura>=1.70 && $Estatura<1.80)
    {
        return ("Su Biotipo es promedio<br>");
        
    }
   else
   {
    return ("Su Biotipo es Alto<br>");
   }
}
   


?>  
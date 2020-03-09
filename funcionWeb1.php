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
    if  ($estatura<1.70m)
    {
        echo " Biotipo Bajo";      
    }
    elseif ($estatura<=1.70m && $estatura<1.80m)
    {
        echo "Biotipo Promedio";
    }
   else
   {
    echo "Biotipo Superior";
   }
   
   function calcularEstatura2($estatura){
    if  ($estatura<1.70m)
    {
        echo " Biotipo Bajo";      
    }
    elseif ($estatura<=1.70m && $estatura<1.80m)
    {
        echo "Biotipo Promedio";
    }
   else
   {
    echo "Biotipo Superior";
   }
   function calcularEstatura3($estatura){
    if  ($estatura<1.70m)
    {
        echo " Biotipo Bajo";      
    }
    elseif ($estatura<=1.70m && $estatura<1.80m)
    {
        echo "Biotipo Promedio";
    }
   else
   {
    echo "Biotipo Superior";
   }

?>  
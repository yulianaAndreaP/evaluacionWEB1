<?php

echo ("Generalidades PHP1 y desarrolle los siguientes ejercicios de Programacion Yuliana Paniagua <br>");
//Ejercicio 1
echo "<br> Ejercicio 1";
echo "<br>";

$numero1=500;
$numero2=1000;

$suma=$numero1+$numero2;
$resta=$numero1-$numero2;
$multiplicacion=$numero1*$numero2;
$division=$numero1/$numero2;

echo("<br>La suma de:".$numero1."+".$numero2."=".$suma);
echo("<br>La resta de:".$numero1."-".$numero2."=".$resta);
echo("<br>La multiplicacion de:".$numero1."*".$numero2."=".$multiplicacion);
echo("<br>La division de:".$numero1."/".$numero2."=".$division);

echo "<br>  <br>";
?>


<?php

//Ejercicio 2

echo "<br> Ejercicio 2 <br>";


$peso=85;
$estatura=1.78;
$imc=$peso/($estatura*$estatura);
echo "<br>Señor usuario su estatura es de: ".$estatura."m y su peso es de: ".$peso."Kg";
echo"<br>Su indice de masa corporal es de: ".$imc." por lo tanto usted tiene ";

if ($imc<=18.4 && $imc>0)
{
    echo " Insuficiencia de peso "; 
}elseif ($imc>=18.5 && $imc<=24.9)
{
    echo "peso normal ";
}elseif ($imc>=25 && $imc<=29.9)
{
    echo "sobrepeso ";
}elseif ($imc>=30 && $imc<=34.9)
{
    echo "Obesidad 1 ";
}elseif ($imc>=35 && $imc<=39.9)
{
    echo "Obesidad 2 ";
}else
{
    echo " <br> Obesidad 3 ";
}


/*//Ejercicio 3 descuento por cantidadde pares comprados*/

echo "<br><br>Ejercicio 3 <br>";
echo "<br>";

$cantidadZapatosVendidos=5;
$valorporPar=150000;
$totalVenta=$cantidadZapatosVendidos*$valorporPar;
$descuento1=0.20;
/*$descuento2=0.20;
$descuento3=0.40;*/

echo "Cantidad vendida: ".$cantidadZapatosVendidos;
echo "<br>Costo Neto: ".$totalVenta;


if($cantidadZapatosVendidos<=3){
    $totalVenta*0.10==$descuento1;
    echo "<br>Descuento: 10%";
}elseif($cantidadZapatosVendidos>3||$cantidadZapatosVendidos<=5){
    $totalVenta*0.20==$descuento1;
    echo "<br>Descuento: 20%";
}elseif($cantidadZapatosVendidos>5){
    $totalVenta*0.40==$descuento1;
    echo "<br>Descuento: 40%";
}

$valorDescuento=$totalVenta*$descuento1;
$valorTotalPagar=$totalVenta-$valorDescuento;

echo "<br>Valor del descuento: ".$valorDescuento;
echo "<br>Valor total a pagar: ".$valorTotalPagar;

//Ejercicio 4
echo "<br>";
echo "<br> Ejercicio 4 <br>";

$cantidadHoras=36;
$valorHora=20000;
$valorHoraExtra=25000;
$salario=$cantidadHoras*$valorHora;
$salario=$cantidadHoras*$valorHoraExtra;



if($cantidadHoras<=40){
    $valorHora*20000;
    
    echo "para un total de: 36 horas, se obtiene un valor hora de $20000 <br>".
    "El salario devengado en la semana es: ".$cantidadHoras*$valorHora;
    

}
else{
      "El salario devengado en la semana es: ".$cantidadHoras*$valorHoraExtra;
   
}

//Ejercicio 5
echo "<br>";
echo "<br> Ejercicio 5 <br>";

$sucursalA=array(
    'usuario1'=>array('nombre'=>"Ana",'telefono'=>3108596,'direccion'=>"calle 5 No 98-58",'salario'=>"1000000"),
    'usuario2'=>array('nombre'=>"Isabella",'telefono'=>2581147,'direccion'=>"calle 52 No 50-12",'salario'=>"1200000"),
    'usuario3'=>array('nombre'=>"Sara",'telefono'=>2368516,'direccion'=>"Cra 45 No 85-49",'salario'=>"2000000"),
    'usuario4'=>array('nombre'=>"Mariana",'telefono'=>2111587,'direccion'=>"Cra 50 No 60-51",'salario'=>"2500000"),
    'usuario5'=>array('nombre'=>"Alejandro",'telefono'=>5128742,'direccion'=>"Cra 44 No 8-42",'salario'=>"4000000"),
);
echo ("<br>");

echo ("<br>.......................");

Print_r ($sucursalA);

//Ejercicio 6
echo "<br>";
echo "<br> Ejercicio 6   <br>";

$NumerosPares=array("1°numero "=> "2","2°numero "=> "4","3°numero "=> "6",
"4°numero"=> "8","5°numero "=> "10");

foreach($NumerosPares as $consecutivo=>$pares)
{
    echo ("El $consecutivo par es: $pares <br>");
}

    
    




























?>



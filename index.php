<?php

include('funcionWeb1.php');

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

echo "<br><br>Ejercicio 5 <br>";
echo "<br>";
echo"Los usuarios registrados en la sucursal A son: <br>";

$usuario1="Juan Perez -"; 
$telefono1="3224567898 -"; 
$direccion1= "Cll 100sur-#34a-25 -"; 
$salario1=3520000;

$usuario2="Ana Gaviria -"; 
$telefono2="3024569852 -"; 
$direccion2="Cll 90#10-80 -"; 
$salario2=4580000;

$usuario3="Pedro Mesa"; 
$telefono3="3108965474 -"; 
$direccion3="Cll 85 #25-10 -"; 
$salario3=1250000;

$usuario4="Catalina Castaño -"; 
$telefono4="3148555555 -"; 
$direccion4="Cll 100sur # 35a-27 -"; 
$salario4=3800000;

$usuario5="Gabriel Rodriguez -"; 
$telefono5="3001234879 -"; 
$direccion5="Cr 37 # 100-20 -"; 
$salario5=6490000;


echo "<br>";
echo $usuario1.$telefono1.$direccion1." $".$salario1."<br>";
echo $usuario2.$telefono2.$direccion2." $".$salario2."<br>";
echo $usuario3.$telefono3.$direccion3." $".$salario3."<br>";
echo $usuario4.$telefono4.$direccion4." $".$salario4."<br>";
echo $usuario5.$telefono5.$direccion5." $".$salario5."<br>";

$sumatoriaSalarios=($salario1+$salario2+$salario3+$salario4+$salario5);
$salarioSucarsalB=20000000;
$salarioSucursalC=15000000;
echo "<br>";
if($sumatoriaSalarios>$salarioSucarsalB&&$sumatoriaSalarios>$salarioSucursalC){

    echo"El mayor ingreso lo tiene la sucrusal A";
}
elseif($salarioSucarsalB>$sumatoriaSalarios&&$salarioSucarsalB>$salarioSucursalC){
    echo"El mayor ingreso lo tiene la sucursal B";
}
else
    echo"El mayor ingreso lo tiene la sucursal C";

    
//Ejercicio 6
echo "<br>";
echo "<br> Ejercicio 6   <br>";
echo "<br>";

$NumerosPares=array("1°numero "=> "2","2°numero "=> "4","3°numero "=> "6",
"4°numero"=> "8","5°numero "=> "10","6°numero "=> "12","7°numero "=> "14","8°numero "=> "16","9°numero "=> "18",
"10°numero "=> "20");

foreach($NumerosPares as $consecutivo=>$pares)
{
    echo ("El $consecutivo par es: $pares <br>");
}

//Ejercicio 7
echo "<br>";
echo "<br> Ejercicio 7   <br>";
echo "<br>";    

echo "El salpicon esta compuesto por: <br>";
$Salpicon = array('dulce1'=>"Banano <br>",'dulce2'=>"Manzana <br>",'dulce3'=>"Durazno <br>",'acido1'=>"Piña <br>",'acido2'=>"Naranja <br>",
'acido3'=>"Lulo");
print_r($Salpicon);

//Ejercicio 8
echo "<br>";
echo "<br> Ejercicio 8   <br>";

calcularEdad(1991);
echo ("<br><br>");
calcularEdad2(1995,2020);
echo ("<br><br>");   
calcularEdad3(1987,2020);
echo ("<br><br>"); 

//Ejercicio 9
echo "<br>";
echo "<br> Ejercicio 9   <br>";

calcularEstatura(1.65m);
echo ("<br><br>");
calcularEstatura2(1.78m);
echo ("<br><br>");   
calcularEstatura3(1.95m);
echo ("<br><br>"); 

    




























?>



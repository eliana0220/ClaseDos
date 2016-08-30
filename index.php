<?php 

/*	echo "EJERCICO 8 <br><br>";	
	$v[1] = 90;
	$v[30] = 7;
	$v['e'] = 99;
	$v['hola'] = 'mundo';

	$valor = array ("1"=>"90", "30"=>"7", "e"=>"99", "hola"=>"mundo");
	#var_dump($valor);

	foreach ($v as $value) 
	{
		echo "$value <br>";
	}

	foreach ($valor as $value) 
	{
		echo "$value <br>";
	}

	echo "----------------------------------------------------<br>";
	echo "EJERCICO 9 <br><br>";

	$lapiceraUno  = array("color" => "Rojo", "marca" => "Bic", "trazo" => "Grueso" , "precio" => "10");
	$lapiceraDos  = array("color" => "Verde", "marca" => "Bic", "trazo" => "Fino" , "precio" => "15");
	$lapiceraTres = array("color" => "Negro", "marca" => "FaberCastel", "trazo" => "Grueso" , "precio" => "30");

	echo "Lapicera Uno <br>";
	foreach ($lapiceraUno as $value) 
	{
		echo "$value <br>";
	}
	echo "<br><br> Lapicera Dos <br>";
	foreach ($lapiceraDos as $value) 
	{
		echo "$value <br>";
	}
	echo "<br><br> Lapicera Tres <br>";
	foreach ($lapiceraTres as $value) 
	{
		echo "$value <br>";
	}
	

	echo "----------------------------------------------------<br>";
	echo "EJERCICO 10 <br><br>";


	$lapiceras[1] = $lapiceraUno;
	$lapiceras[2] = $lapiceraDos;
	$lapiceras[3] = $lapiceraTres;

	foreach ($lapiceras as $lap) 
	{
		echo "<br><br>---Lapicera---<br>";
	  	foreach ($lap as $value) 
	  	{
	  		echo "$value <br>";
	  	}

	} */

	//include "figuraGeometrica.php"; 		#Arroja Warning si no está pero puedo seguir con el código
	//require "figuraGeometrica.php"; 		#Es obligatorio, arroja Fatal Error
	//require_once "figuraGeometrica.php"	#No permite definir más de una vez

	include "rectangulo.php";
	#Declaración de variables
	$rectImp;

	###Se crea la siguiente figura RECTÁNGULO

	#Se crea la figura
	$rec1 = new rectangulo (6,14);
	#Set al campo color de la figura creada
	$rec1->SetColor("blue");
	#Se obtienen los datos de la figura en un string
	$rectImp = $rec1->ToString();
	#Se obtiene el color de impresión
	$color = $rec1->GetColor();
	#Se imprimen los datos de la figura
	echo "<font color= 'blue'>"
		."Tipo: "
		.$rectImp["tipo"]."<br>"
		."Lado Horizontal: "
		.$rectImp["lUno"]."<br>"
		."Lado Vertical: "
		.$rectImp["lDos"]."<br>"
		."Perímetro: "
		.$rectImp["perim"]."<br>"
		."Superficie: "
		.$rectImp["sup"]."<br>"
		."Figura: <br>";
		#Se imprime la figura
		foreach ($rectImp["fig"] as $value) 
		{
			echo $value;
		}
	echo "<br><br>";
	###Se crea la siguiente figura RECTÁNGULO

	#Se crea la figura
	$rec2 = new rectangulo (30,5);
	#Set al campo color de la figura creada
	$rec2->SetColor("red");
	#Se obtienen los datos de la figura en un string
	$rectImp = $rec2->ToString();
	#Se obtiene el color de impresión
	$color = $rec2->GetColor();
	#Se imprimen los datos de la figura
	echo "<font color=".$color.">"
		."Tipo: "
		.$rectImp["tipo"]."<br>"
		."Lado Horizontal: "
		.$rectImp["lUno"]."<br>"
		."Lado Vertical: "
		.$rectImp["lDos"]."<br>"
		."Perímetro: "
		.$rectImp["perim"]."<br>"
		."Superficie: "
		.$rectImp["sup"]."<br>"
		."Figura: <br>";
		#Se imprime la figura
		foreach ($rectImp["fig"] as $value) 
		{
			echo $value;
		}


 ?>
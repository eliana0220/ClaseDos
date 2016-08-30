<?php
	//include "figuraGeometrica.php";
	class Triangulo extends FiguraGeometrica
	{
		private $_altura;
		private $_base;

		function __construct ($base, $altura)
		{
			#Se llama al contructor de la clase padre
			parent:: __construct();
			$this->_altura = $altura;
			$this->_base   = $base;
			$this->CalcularDatos();
		}

		protected function CalcularDatos ()
		{
			#Se busca obtener el lado faltante para luego poder sacar el perímetro
			$aux1 = pow($this->_base, 2);
			$aux2 = pow($this->_altura, 2);
			$lado = $aux1 * $aux2 / 2;
			#Se obtiene el perímetro del triángulo
			$this->_perimetro  =  $this->_base + $this->_altura +  $lado;
			#Se obtiene la superficie del triángulo
			$this->_superficie = $this->_base * $this->_altura / 2 ;
		}

		public function Dibujar()
		{
			$figura = array();
			$linea = "";
			$base_aux = $this->_base;
			#Se recorre la cantidad de lineas correspondiente a la altura seleccionada por el usuario
			for ($j=1; $j <= $this->_altura; $j++) 
			{ 
				#Se agregan los asteriscos correspondientes a la base seleccionada por el usuario
				for ($i=1; $i <= $base_aux; $i++) 
				{ 
					$linea.= "*";
				}
				$base_aux = $base_aux - 1;
				$linea.= "<br>";
			}
			#Se carga la figura al array y se retorna
			array_push($figura, $linea);
			return $figura;		
		}

		public function ToString()
		{	
			#Se obtienen todos los datos de la figura y se retornan
			parent::ToString();
			$objeto["tipo"]    = "Triángulo<br>";
			$objeto["base"]    = $this->_base;
			$objeto["altura"]  = $this->_altura;
			$objeto["perim"]   = $this->_perimetro;
			$objeto["sup"]	   = $this->_superficie;
			$objeto["fig"]     = $this->Dibujar();
			return $objeto;
		}
	}
?>
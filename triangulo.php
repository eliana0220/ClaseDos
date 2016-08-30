<?php
	include "figuraGeometrica.php";
	class Triangulo extends FiguraGeometrica
	{
		private $_altura;
		private $_base;

		function __construct ($base, $altura)
		{
			paremt:: __construct();
			$this->_altura = $altura;
			$this->_base   = $base;
			$this->CalcularDatos();
		}

		protected function CalcularDatos ()
		{
			$aux1 pow($this->_base, 2);
			$aux2 pow($this->_altura, 2);
			$lado = $aux1 * $aux2 / 2;
			$this->_perimetro  =  $this->_base + $this->_altura +  $lado;
			$this->_superficie = $this->_base * $this->_altura / 2 ;
		}
	}
?>
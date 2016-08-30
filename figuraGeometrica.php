<?php
	
	abstract class FiguraGeometrica
	{
		protected $_color;
		protected $_perimetro;
		protected $_superficie;

		function __construct()
		{
		}

		public function GetColor()
		{
			return $this->_color;
		}

		public function SetColor($col)
		{
			$this->_color = $col;
		}

		public function ToString()
		{
			//para que sea virtual en el metodo que redefine primero llamo al padre con base o parent (ver) y despues redefino
		}

		public function Dibujar()
		{
			return $this->_color;
		}

		protected function CalcularDatos()
		{
		}
	}

?>
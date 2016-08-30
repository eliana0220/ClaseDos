<?php
	include "figuraGeometrica.php";
	class Rectangulo extends FiguraGeometrica
	{
		private $_ladoUno;
		private $_ladoDos;

		function __construct ($lUno, $lDos)
		{
			parent::__construct();
			$this->_ladoUno = $lUno;
			$this->_ladoDos = $lDos;
			$this->CalcularDatos();
		}

		protected function CalcularDatos ()
		{
			$this->_perimetro  = $this->_ladoUno * 2 + $this->_ladoDos * 2 ;
			$this->_superficie = $this->_ladoUno * $this->_ladoDos ;
		}

		public function Dibujar()
		{
			$figura = array();
			//$figura["color"] = parent::Dibujar() ;
			$linea = "";
			for ($j=1; $j <= $this->_ladoDos; $j++) 
			{ 
				for ($i=1; $i <= $this->_ladoUno ; $i++) 
				{ 
					$linea.= "*";
					//$linea."*";
				}
				$linea.= "<br>";
			}
			array_push($figura, $linea);
			return $figura;		
		}
		
		public function ToString()
		{
			parent::ToString();
			$objeto["tipo"]  = "Rectángulo<br>";
			$objeto["lUno"]  = $this->_ladoUno;
			$objeto["lDos"]  = $this->_ladoDos;
			$objeto["perim"] = $this->_perimetro;
			$objeto["sup"]	 = $this->_superficie;
			$objeto["fig"]   = $this->Dibujar();
			return $objeto;
		}
	}

?>
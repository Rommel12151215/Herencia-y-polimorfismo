<?php

interface Figura {
   public function calcularArea();
}

class Cuadrado implements Figura {
   private $lado;
   public function __construct($lado) {
       $this->lado = $lado;
   }
   public function calcularArea() {
       return $this->lado * $this->lado;
   }
}

class Circulo implements Figura {
   private $radio;
   public function __construct($radio) {
       $this->radio = $radio;
   }
   public function calcularArea() {
       return 3.1416 * $this->radio * $this->radio;
   }
}

$cuadrado = new Cuadrado(5);
echo $cuadrado->calcularArea(); // Output: 25

$circulo = new Circulo(3);
echo $circulo->calcularArea(); // Output: 28.2744

?>
<?php 
    class Telefono {
        public $marca;
        public $modelo;
        protected $alambrico = true;
        protected $comunicacion;
     
        public function __construct($marca, $modelo) {
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->comunicacion = ($this->alambrico) ? 'Alámbrica' : 'Inalámbrica';
        }
     
        public function llamar() {
            return print('<p>Ring ring</p>');
        }
     
        public function mas_info() {
            return print('<ul>
                <li>Marca: <b>' . $this->marca . '</b></li>
                <li>Modelo: <b>' . $this->modelo . '</b></li>
                <li>Comunicación: <b>' . $this->comunicacion . '</b></li>
            </ul>');
        }
     }
     
     class Celular extends Telefono {
        protected $alambrico = false;
        public function __construct($marca, $modelo) {
            parent::__construct($marca, $modelo);
        }
     }
?>
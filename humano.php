<?php
    class Humano {
        public $nombre;
        public $apellido;
        public $edad;
        public $sexo;
        public $pais;

        public function saludar() {
            echo "Hola, $this->nombre";
        }
        public function imprimir() {
            echo "nombre: $this->nombre\n";
            echo "apellido: $this->apellido\n";
            echo "edad: $this->edad\n";
            echo "sexo: $this->sexo\n";
            echo "pais: $this->pais\n";
        }
    }

?>
<?php
    class Poblacion {
        // Propiedades
        private $idPoblacion;
        private $cp;
        private $nombreMunicipio;

        // Métodos:
        public function getIdPoblacion() {
            return $this->idPoblacion;
        }

        public function setIdPoblacion($idPoblacion) {
            $this->idPoblacion = $idPoblacion;
        }

        public function getCp() {
            return $this->cp;
        }

        public function setCp($cp) {
            $this->cp = $cp;
        }

        public function getNombreMunicipio() {
            return $this->nombreMunicipio;
        }

        public function setNombreMunicipio($nombreMunicipio) {
            $this->nombreMunicipio = $nombreMunicipio;
        }
    }
?>
<?php

namespace App\Services\PracticasVehiculo\Automovil;

use App\Services\PracticasVehiculo\Vehiculo\Vehiculo;

class Automovil extends Vehiculo {
    public $numeroPuertas;
    
    public function __construct($marca, $modelo, $anio, $color, $velocidad, $numeroPuertas) {
        $this->numeroPuertas = $numeroPuertas;
        parent::__construct($marca, $modelo, $anio, $color, $velocidad);
    }



 public function mostrarInformacion() {
        parent::mostrarInformacion();
        echo "Numeros de puertas: {$this->numeroPuertas} \n";
    }

    public function getNumeroPuertas(){
        return $this->numeroPuertas;
    }
}
<?php

namespace App\Services\PracticasVehiculo\Camion;

use App\Services\PracticasVehiculo\Vehiculo\Vehiculo;

class Camion extends Vehiculo {
    public $capacidadCarga;

public function __construct($marca, $modelo, $anio, $color, $velocidad, $capacidadCarga) {
    $this->capacidadCarga = $capacidadCarga;
    parent::__construct($marca, $modelo, $anio, $color, $velocidad);
}

public function cargarCarga() {
    echo "{$this->marca} {$this->modelo} la carga se ha realizado con exito \n";

}

public function mostrarInformacion() {
    parent::mostrarInformacion();
    echo "Capacidad de Carga: {$this->capacidadCarga} kg \n";
}
}

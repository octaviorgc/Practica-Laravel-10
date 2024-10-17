<?php

namespace App\Services\PracticasVehiculo\Motocicleta;
use App\Services\PracticasVehiculo\Vehiculo\Vehiculo;

class Motocicleta extends Vehiculo {
    public $tipoManillar;

public function __construct($marca, $modelo, $anio, $color, $velocidad, $tipoManillar) {

    $this->tipoManillar = $tipoManillar;
    parent::__construct($marca, $modelo, $anio, $color, $velocidad);
       
}

public function hacerCaballito() {
    echo "{$this->marca} {$this->modelo} esta levantando caballito \n";

}

public function mostrarInformacion() {
    parent::mostrarInformacion();
    echo "Tipo de Manillar: {$this->tipoManillar}\n";
}
}


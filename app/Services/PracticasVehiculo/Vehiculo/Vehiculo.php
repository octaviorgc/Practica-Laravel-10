<?php

namespace App\Services\PracticasVehiculo\Vehiculo;
// use test\Unit;
abstract class Vehiculo {

    public $marca;
    public $modelo;
    public $anio;
    public $color;
    public $velocidad;

    public function __construct($marca, $modelo, $anio, $color, $velocidad) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->anio = $anio; 
        $this->color = $color;
        $this->velocidad = $velocidad;  
    }

    public function acelerar($incremento) {
        $this->velocidad += $incremento;
        echo "{$this->marca} {$this->modelo} ha acelerado a {$this->velocidad} km/h.\n";
    }

    public function frenar($decremento) {
        $this->velocidad -= $decremento;
        if ($this->velocidad < 0) $this->velocidad = 0;

        echo "{$this->marca} {$this->modelo} ha frenado a {$this->velocidad} km/h.\n";
    }

    public function mostrarInformacion() {
        echo "Marca: {$this->marca}, Modelo: {$this->modelo}, Año: {$this->anio}, Color: {$this->color}, Velocidad: {$this->velocidad}km/h.\n";
    }
    public function getVelocidad() {

        return $this->velocidad;
    }

 

}

    
<?php

use App\Services\PracticasVehiculo\Automovil\Automovil;
use App\Services\PracticasVehiculo\Motocicleta\Motocicleta;
use App\Services\PracticasVehiculo\Camion\Camion;


$automovil = new Automovil("Chery", "Orinoco", 2012, "Rojo", 0,numeroPuertas: 4);
$motocicleta = new Motocicleta("Yamaha", "Rx", 2015, "Azul", 0, "Deportivo");
$camion = new Camion("Ford", "Triton", 2006, "Vinotinto", velocidad: 50, capacidadCarga: 500);


$automovil->mostrarInformacion();
$automovil->acelerar(60);
$automovil->frenar(20);
$automovil->abrirCajuela();

$motocicleta->mostrarInformacion();
$motocicleta->acelerar(100);
$motocicleta->frenar(30);
$motocicleta->hacerCaballito();

$camion->mostrarInformacion();
$camion->acelerar(50);
$camion->frenar(10);
$camion->cargarCarga();

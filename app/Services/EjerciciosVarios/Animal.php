<?php

abstract class Animal {

protected $nombre;
protected $edad;

public function __construct($nombre, $edad) {
        $this->$nombre = $nombre;
        $this->edad = $edad;

}

public function hacerSonido() {
        return "El animal hace un sonido";

    }   

}

class Perro extends Animal {
    public function hacerSonido() {
        return "El perro ladra";

    }
}

class Gato extends Animal {
    public function hacerSonido() {
        return "El gato maulla"

    }
}

$perro = New Perro("Max, 3");
$gato = New Gato("Blanca, 2");

echo $perro->hacerSonido() . "\n";
echo $gato->hacerSonido() . "\n";
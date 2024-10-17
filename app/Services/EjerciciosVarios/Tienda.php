<?php


//Ejercicio 4: Gestión de Productos en una Tienda
Objetivo: Trabajar con clases para simular la gestión de productos en una tienda.
Crea una clase Producto con los atributos nombre, precio y cantidad.
Implementa métodos para ajustar el precio y la cantidad de un producto.
Crea un método calcularTotal que retorne el precio total en función de la cantidad disponible.
Crea una clase Tienda que administre un arreglo de productos.
Agrega métodos para añadir un producto a la tienda y mostrar el inventario

class Producto {
    private $nombre;
    private $precio;
    private $cantidad;
}

public function __construct($nombre, $precio, $cantidad) {
    $this->$nombre = $nombre;
    $this->$precio = $precio;
    $this->$cantidad = $cantidad;
}

public function ajustarPrecio($nuevoPrecio) {
    $this->precio = $nuevoPrecio;
}

public function ajustarCantidad($nuevaCantidad) {
    $this->$cantidad = $nuevaCantidad;

}

public function calcularTotal($nuevaCantidad) {
    return $this->precio * $this->$cantidad;
}

public function obtenerNombre() {
    return $this->nombre;
}

public function obtenerPrecio() {
    return $this->precio;
}

public function obtenerCantidad() {
    return $this->$cantidad;
}

class Tienda {
    private $productos = [];

    public function agregarProducto($producto) {
        $this->producto[] = $producto;
    }

public function mostrarInvetario() {
    foreach ($this->productos  as $producto) {
        echo "Producto: " . $producto->obtenerNombre() . ", Precio: $" . $producto->obtenerPrecio() . ", Cantidad: " . $producto->obtenerCantidad() . "\n";
        }
    }   
}

$producto1 = new Producto("Manzana", 0.5, 100);
$producto2 = new Producto("Naranja", 0.3, 150);

$tienda = new Tienda();
$tienda->agregarProducto($producto1);
$tienda->agregarProducto($producto2);

$tienda->mostrarInventario();


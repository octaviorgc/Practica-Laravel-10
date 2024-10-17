<?php declare(strict_types= 1);

namespace Tests\Unit;

use App\Services\PracticasVehiculo\Automovil\Automovil;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class AutomovilTest extends TestCase
{
    #[TestDox('Verificando propiedades')]
    #[Test]
    public function testMostrarInformacion()
    {
        $automovil = new Automovil("Chery", "Orinoco", 2012, "Rojo", 0, numeroPuertas: 4);

        $this->assertSame("Chery", $automovil->marca);
        
        $this->assertEquals("Orinoco", $automovil->modelo);

        $this->assertSame(expected: 2012, actual: $automovil->anio);

        $this->assertSame("Rojo", $automovil->color);

        $this->assertSame(4 ,$automovil->numeroPuertas);

    }

    #[TestDox('Acelerando Automovil')]
    #[Test]
    public function testAcelerar(): void {

        $automovil = new Automovil("Chery", "Orinoco", 2012, "Rojo", 0, numeroPuertas: 4);

    $automovil->acelerar(70);
        $this->assertSame(70,$automovil->getVelocidad());  
    }

    #[TestDox('Frenando Automovil')]
    #[Test]
    public function testFrenar(): void {
        $automovil = new Automovil("Chery", "Orinoco", 2012, "Rojo", 100, 4);

        
        $automovil->frenar(50);
        $this->assertSame(50, $automovil->getVelocidad());
}
    
   
   

}
<?php declare(strict_types= 1);

namespace Tests\Unit;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use App\Services\PracticasVehiculo\Camion\Camion;

class CamionTest extends TestCase
{
    #[TestDox('Verificando propiedades')]
    #[Test]
    public function testMostrarInformacion()
    {
        $camion = new Camion("Ford", "Triton", 2006, "Vinotinto", 50, capacidadCarga: 500);

        $this->assertSame("Ford", $camion->marca);
        
        $this->assertEquals("Triton", $camion->modelo);

        $this->assertSame(expected: 2006, actual: $camion->anio);

        $this->assertSame("Vinotinto", $camion->color);

        $this->assertSame(500, $camion->capacidadCarga);

    }

    #[TestDox('Acelerando Camion')]
    #[Test]
    public function testAcelerar(): void {

        $camion = new camion("Ford", "Triton", 2006, "Vinotinto", 0, 500);

    $camion->acelerar(80);
        $this->assertSame(80,$camion->getVelocidad());
    }

    #[TestDox('Frenando Camion')]
    #[Test]
    public function testFrenar(): void {
        $camion = new camion("Ford", "Triton", 2006, "Vinotinto", 100, 500);

        
        $camion->frenar(50);
        $this->assertSame(50, $camion->getVelocidad());
}

}

<?php declare(strict_types= 1);

namespace Tests\Unit;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use App\Services\PracticasVehiculo\Camion\Vehiculo;

class VehiculoTest extends TestCase
{

    #[TestDox('Verificando propiedades')]
    #[Test]
   
    public function testMostrarInformacion()
    {
        $camion = new Vehiculo("Ford", "Triton", 2006, "Vinotinto", 50, capacidadCarga: 500);

        
        $this->assertSame("Ford", $camion->marca);

        
        $this->assertEquals("Triton", $camion->modelo);

        
        $this->assertSame(expected: 2006, actual: $camion->anio);

        $this->assertSame(500, $camion->capacidadCarga);
    }





}
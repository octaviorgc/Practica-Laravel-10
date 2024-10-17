<?php declare(strict_types= 1);

namespace Tests\Unit;

use App\Services\PracticasVehiculo\Motocicleta\Motocicleta;
use PHPUnit\Framework\Attributes\TestDox;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class MotocicletaTest extends TestCase
{

    #[TestDox('Verificando propiedades')]
    #[Test]

    public function testMostrarinformacion(): void {

        $motocicleta = new Motocicleta("Yamaha", "Rx", 2015, "Azul", 0, tipoManillar: "Deportivo");

        $this->assertSame("Yamaha", $motocicleta->marca);
        
        $this->assertEquals("Rx", $motocicleta->modelo);

        $this->assertSame(expected: 2015, actual: $motocicleta->anio);

        $this->assertSame("Azul", $motocicleta->color);
    
        $this->assertEquals(expected:"Deportivo",actual: $motocicleta->tipoManillar);
    
    
    }

    #[TestDox('Acelerando motocicleta')]
    #[Test]
    public function testAcelerar(): void {

        $motocicleta = new Motocicleta("Yamaha", "Rx", 2015, "Azul", 0, "Deportivo");

    $motocicleta->acelerar(100);
        $this->assertSame(100,$motocicleta->getVelocidad());
    }


    #[TestDox('Frenando motocicleta')]
    #[Test]
    public function testFrenar(): void {
        $motocicleta = new Motocicleta("Yamaha", "Rx", 2015, "Azul", 100, "Deportivo");

        
        $motocicleta->frenar(50);
        $this->assertSame(50, $motocicleta->getVelocidad());
    }



    
}




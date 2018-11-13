<?php

namespace Tests\Feature;

use myBonsai\Bonsai\Olmo;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class BonsaiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testTengoQueAbonoar()
    {
        $olmo= new Olmo();

        $fecha_abono = strtotime("2018-08-01");
        $this->assertTrue($olmo->tengoQueAbonar($fecha_abono));
        $fecha_abono = strtotime("2018-11-01");
        $this->assertFalse($olmo->tengoQueAbonar($fecha_abono));
    }

    public function testTransplantar()
    {
        $olmo= new Olmo();
        $this->assertFalse($olmo->transplantar());
    }


}

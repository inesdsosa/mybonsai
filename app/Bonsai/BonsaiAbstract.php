<?php
/**
 *
 * User: ines
 * Date: 13/11/18
 * Time: 10:47
 */
namespace myBonsai\Bonsai;

abstract class BonsaiAbstract
{

    abstract protected function riego();


    public function tengoQueAbonar($fecha_abono) {

        $fecha_actual = date("d-m-Y");
        $fecha_condicion = strtotime(date("d-m-Y",strtotime($fecha_actual."- 30 days")));

        if ($fecha_condicion < $fecha_abono)
              return true;
        else
              return false;

    }

    public function transplantar() {

        if (date("m") == '03') {
            return true;
        }else {
            return false;
        }


    }

}

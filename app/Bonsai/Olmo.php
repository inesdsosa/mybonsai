<?php
/**
 * Created by PhpStorm.
 * User: ines
 * Date: 13/11/18
 * Time: 10:57
 */

namespace myBonsai\Bonsai;
use myBonsai\Bonsai\BonsaiAbstract;


class Olmo extends BonsaiAbstract
{
    public function Pulverizar() {
        return true;
    }

    public function riego()
    {

        return "muy frecuente";
    }

}

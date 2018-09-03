<?php

namespace app\classes;
use app\interfaces\InterfaceSubstituir;
class Execute
{
    public function execute(?InterfaceSubstituir $executor)
    {
        $value = $executor->substituir();
        return $value;
    }
}
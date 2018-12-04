<?php

require_once "./klasa.php";

class NowaKlasa extends StaraKlasa
{
    public $arg1;
    public $arg2;
    public function funkcja2($arg)
    {
        $this->arg1 = $arg;
        return $this;
    }

    public function funkcja3($arg)
    {
        return $this->arg2 = $arg . " " . $this->arg2;
    }

}

$nowyObiekt = new NowaKlasa();

wyswietl($nowyObiekt
    ->funkcja2("funkcja2")
    ->funkcja1( "funkcja1"))
;




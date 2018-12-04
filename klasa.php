<?php

require_once "./wyswietl.php";

class StaraKlasa
{
    public $property1 = "wartosc property";

    protected $property2 = "protected";

    private $property3 = "private";

    public CONST STALA1 = "abc";

    private CONST STALA2 = "dsdd";

    public function funkcja1()
    {
        return "hello";
    }

    protected function function2()
    {
        return "protected function";
    }

    private function function3()
    {
        return "private function";
    }
}



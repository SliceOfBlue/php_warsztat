<?php

class requestTypeChecker
{
    public function isPost(): bool
    {
        return filter_input(INPUT_SERVER, "REQUEST_METHOD") === "POST";
    }
}

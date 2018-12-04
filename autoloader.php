<?php
spl_autoload_register(function ($class) {
    // $class = "Service\LoadMe";
    $classElements = explode("\\", $class);
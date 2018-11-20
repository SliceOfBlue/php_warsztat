<?php
require_once "./tablice.php";

wyswietl("count: " . count(newTable));

foreach($newTable as $element) {
    wyswietl($klucz. " ->>>" . $element);
    if ($element === "66") {
        break;
    }
}
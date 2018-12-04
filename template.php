<?php

$readfile = file_get_contents("./template.html");

$now = new DateTime("NOW");

$FiveDaysAgo = new DateTime("NOW");
$FiveDaysAgo ->modify("- 5 days");




    $str_replace = [
        "{{ myName }}" => "damian",
        "{{ title }}" => "It's awesome",
        "{{ currentDate }}" => $now -> format("Y-m-d"),
        "{{ 5DaysAgo}}" => $FiveDaysAgo -> format("Y-m-d")
    ];
    foreach ($str_replace as $key => $value) {
        $readfile = str_replace($key, $value, $readfile);
    }

    file_put_contents ("./parsedTemplate.html", $readfile);

    readfile("./parsedTemplate.html");




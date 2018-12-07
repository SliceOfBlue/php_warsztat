<?php

$readfile = file_get_contents("./template1.html");

$fileName = pathinfo(__FILE__, PATHINFO_BASENAME);


$requestData = $_POST;

if (isRequestValidPost()) {
    $concatedString = $_POST["email"]. ":". $_POST["password"];
    echo $concatedString;
    $template1 = str_replace("{{ActionResults}}", $concatedString, $template1);
}

$fileName = pathinfo(__FILE__, PATHINFO_BASENAME);
$readfile = str_replace("{{formTarget}}", $fileName, $readfile);


/**
 * @return bool
 */

function isRequestValidPost()
{
    return 0 < count($_POST) && array_key_exists("password", $_POST) && array_key_exists("email", $_POST);

}


echo $readfile;













//echo "<pre>".var_export(pathinfo(__FILE__), true). "</pre>";

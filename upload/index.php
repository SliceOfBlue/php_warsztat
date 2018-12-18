<?php

require_once  "./autoloader.php";

$template = file_get_contents("./template.html");

$template = str_replace(

"{{formTarget}}",
    pathinfo(__FILE__, PATHINFO_BASENAME),
    $template

);


if(new RequestTypeChecker()) -> isPost()){
    $uploadedFileHanded = new UploadedFileHanded();
    $uploadedFileHanded->saveUploadedFile();

    $metadataParser = new ReadFileMetadata($newFileDestinationPath);
    $metadata = $metadataParser->read();


}

echo $template;

//echo $uploadedFileHanded->getUploadedFilePath;
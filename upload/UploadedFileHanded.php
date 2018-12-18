<?php

class uploadedFileHanded
{
    private $newFileDestination;
    public function saveUploadedFile(): void
    {
        if(array_key_exists("fileBinary", $_FILES)){
            $this->newFileDestination = $this->getnewFileDestination();

            move_uploaded_file(
                $_FILES["fileBinary"]["tmp_name"],
                $this->newFileDestination
            );
        }
        $newFileDestination = " . "
            .DIRECTORY_SEPARATOR
            . "upload"
            .DIRECTORY_SEPARATOR
            .$_FILES["fileBinary"]["name"];

            move_uploaded_file(
                $_FILES["fileBinary"]["tmp_name"],
                $newFileDestination
            );
    }
}

<?php


class ReadFileMetadata
{
    private $filePath;
    public function  __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }
    public function read(): array {
        return stat($this->filePath);
    }
}

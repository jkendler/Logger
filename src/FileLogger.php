<?php
namespace Jkendler\Logger;

class FileLogger implements ILogger {

    private $handle = null;

    public function __construct($filename){
        $this->handle= fopen($filename, "a");

    }

    public function logEntry($line)
    {
        fwrite($this->handle, $line . "\n");
    }

    public function __destruct(){
        fclose($this->handle);
    }

}
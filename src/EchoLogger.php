<?php

class EchoLogger implements ILogger{
    public function logEntry($entry)
    {
        echo $entry . "\n";
    }
}
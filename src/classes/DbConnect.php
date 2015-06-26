<?php

class DbConnect

{
    /** @var  PDO */
    private $handler;

    public function getHandler()
    {
        if (!$this->handler) {
            $this->handler = new PDO('mysql:host=localhost;dbname=symfony', 'root', 'root');
            $this->handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->handler;
    }
}

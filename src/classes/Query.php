<?php

require_once __DIR__ . '/DbConnect.php';

class Query
{
    function getAllBirthdays()
    {
        $conn   = new DbConnect();
        $query  = $conn->getHandler()->query("SELECT * FROM dinosaur");
        $result = $query->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}

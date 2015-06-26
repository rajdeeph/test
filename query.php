<?php

require_once dirname(__FILE__).'/dbconnect.php';


class query
    {

        function getAllBirthdays()
        {

        $result = array();
        $conn = new dbconnect();
        $conn->setHandler()->query("SELECT * FROM Person");
        var_dump($conn);
        //$a = $conn->handler;
        //$result = $conn->handler->query("SELECT * FROM Person");

        return $result;

        }


    }

$db = new query();
$days = $db->getAllBirthdays();
print_r($days);
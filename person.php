<?php
/**
 * Created by PhpStorm.
 * User: Dabz
 * Date: 6/01/2015
 * Time: 10:49 PM
 */

require_once('birthday.php');


$person1 = new birthday('rajdeep','hazarika','19/10/1983',' male');
$person2 = new birthday('swagata','hazarika','24/02/1984','female');

echo $person2->greet();
























$obj = new birthday('rajdeep','hazarika','19/10/1983','male');
echo $obj->greet();

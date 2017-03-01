<?php 

require_once 'pear/php/PHP/UML.php';

$uml = new PHP_UML();

$uml->setInput('pear/test');
$uml->parse('myApp');
$uml->export('xml', 'myApp.xmi');

?>
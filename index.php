<?php

include './ns1/Table.php';
include './ns2/Table.php';

// ------------ 0 ------------
// ... if namespaces are commented out we get an error:
// ... PHP Fatal error:  Cannot declare class Table, because the name is already in use in ...
// $t1 = new Table(); 
// var_dump($t1);

// ------------ 1 ------------
// $t1 = new Html\Table(); 
// var_dump($t1);

// $t2 = new Furniture\Table(); 
// var_dump($t2);

// ------------ 2 ------------
namespace Html;

use Furniture as F;

$t2 = new F\Table(); // naudosime Table klasę iš ns Furniture
var_dump($t2);

$t1 = new Table(); // naudosime Table klasę iš ns Html
var_dump($t1);

?>

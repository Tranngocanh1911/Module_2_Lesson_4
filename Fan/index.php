<?php
include 'Fan.php';
$fan1 = new Fan(10, 'yellow',Fan::fast, true,);
$fan1->toString();
$fan2 = new Fan(5, blue, Fan::medium, false);
$fan2->toString();
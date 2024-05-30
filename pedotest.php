<?php
include 'Pedometer.php';
$test1= new Pedometer("11.11.2011");
$i=0;
while($i<1111){
    $test1->incrementSteps();
    $i++;
}
$test1->toString();
echo("<br />");

$test2= new Pedometer("1.9.2017");
$i=0;
while($i<10000){
    $test2->incrementSteps();
    $i++;
}
$test2->toString();

?>
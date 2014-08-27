<?php

/* 
 * Introduction to php
 */


print "Hello World using print";

print '<br />';

//echo 'Hello World using echo';



//php data types

$num_a = 10;

$num_a = 10.5874;

$num_a = false;


$num_a = "My world";




function get_sum($a, $b) {
    
    print 'Sum: ' . ( $a + $b );
    
}


get_sum(10, 20);



print '<br />print vs echo <br />';

$one = 'One ';
$two = 'Two ';
$three = 'Three';


echo $one,$two,$three;

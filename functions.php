<?php

/* 
 * Functions Misc Topics.
 */

/*
print '<h2>variable variable substitution</h2>';

$a = 10;
$b = 'a';


print $$b;

print '<hr />';


print '<h2>variable function</h2>';

function greet( $name='Biswajeet' ) {
    
    $message = "";
    $message .= 'Hi there...<br />';
    $message .= "\t from $name";
    
    print $message;
}


$func = 'greet';

print $func('Arindam');

//print $new;
print '<hr>';

$chp = 0;
print ++$chp;

*/


function counter() {
    
    static $count = 0;              //LIfetime of static varible is throughout app life cycle
    print 'Count: ' . ++$count . '<br />';
    
}

counter();
counter();
counter();

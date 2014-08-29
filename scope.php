<?php

/* 
 * function & Variable scope.
 */
 /**/




/*
function construct_message($name) {
    
    global $message;
    $message = 'Hi there from ' . $name . '!';
    
}


function display_message() {
    
    //local var
    //$message = 'Hi there!';
    
    global $message;
    
    print $message;
    
}

construct_message("Biswajeet");
display_message();

function get_val($a,$b) {
    global $val;
    $val=$a*$b;
}

function printval() {
    global $val;
    print 'Value='.$val;
    
}
get_val(8,6);
printval();
*/

//function returning a value
function get_my_value() {
    
    $value = "Hello from function";
    
    return $value;
    
    print '123456<br />';
    
}


$new_value = get_my_value();

print $new_value;

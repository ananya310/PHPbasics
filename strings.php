<?php

/* 
 * String in PHP.
 */

$from = 'Rinku';


$greet = "hello world \"$from\"";


print $greet;

print '<br />';
//get str length
//print strlen($greet);


//$color = [ 'red', 'blue', 'green' ];

//print implode('$ ', $color);


//list($red, $blue, $green) = $color;


//print $red;


$id = 'article-new-place';

$id_elem = explode('-', $id);


print $id_elem[0] . ' ' . $id_elem[1] . ' ' . $id_elem[2];

print '<br />';

//check for empty string
$text = '';

if ( empty($text) )
    print '$text is empty';

print '<br />';


$heredoc = <<< END
!#$^*U(&(*(_)(_+_++\\\\\////?/////        
END;

print $heredoc;

print '<br />';


//to lower case
print strtolower('HELLO');


//to upper case
print strtoupper(' world');


print '<br />';

//print ucfirst('rinku choudhury');


//print ucwords('rinku choudhury');


//formatted string
$format_str = "Hi there...<br />My name is %s<br />Phone# %d";


//$formatted_text = sprintf($format_str, 'Biswajeet', 123456);

//echo $formatted_text;


<?php

/* 
 * PHP Indexed Arrays.
 */

//old way - <= PHP 5.2.x
//$fruit = array();


/*/*
$fruit = [

    'apple', 'banana', 'orange'
];



if ( is_array($fruit) )
    print '<p>fruit is an array</p>';


$fruit[] = 'mango';
$fruit[] = 'pineapple';


print 'Total fruits: ' . count($fruit);

print '<br />';

/*
for ( $i=0; $i < count($fruit); $i++ )
    print '<br>'. $fruit[$i].'<br>';



//enhence for loop
foreach ($fruit as $f) {
    print $f . '<br />';
}



$num = [10,15,20];

/*
foreach ($num as $x) {
    $x++;
   // print $x . '<br>';
}

print $num[0];


for ( $i=0; $i < count($num); $i++ ) {
    
    $num[$i]++;
    
}

print $num[0] . ' ' . $num[1];


$elem = array_shift($num);

print $elem;

print '<br />';

print count($num);
*/
/*




function query_fruit($fn) {
    
    $default = 'No fruit available with name: ' . $fn;
    
    //fruit store
    $fruit_store = [

        ['apple', 'red'],
        ['banana', 'yellow'],
        ['grapes', 'green']

    ];
    
    
    $result = false;
    foreach ( $fruit_store as $fruit_set ) {
        
        if ( $fruit_set[0] == $fn ) {
            //$result = $fn . ' : ' . $fruit_set[1];
            
            $result = '<p style="font-weight:bold; color: '. $fruit_set[1] .'">' . $fn . '</p>';
            break;
        }
        
    }
    
    print $result ? $result : $default;
    
}


//query_fruit('APPLE');


//check array elem if exists
/*
if ( isset($fruit[3]) )
    print $fruit[3];
else
    print 'fruit at pos 3 is not available';
*/

//$fruit1 = [ 'apple', 'banana', 'orange' ];



//$fruit2 = [ 'banana', 'orange', 'mango', 'grapes' ];

//$fruit = array_merge_recursive($fruit1, $fruit2);

//print '<pre>';

//print_r( array_reverse($fruit1) );

//print '</pre>';

//array function dereferencing
/*
function array_output() {
    return [ 'apple', 'banana', 'orange' ];
}

print array_output()[0];
*/


/*$fruit_set = [
    
    'apple' => 'red',
    'banana' => 'yellow',
    'grapes' => 'green'
    
];


$fruit_set['mango'] = 'greenish';


//print $fruit_set['mango'];


print '<pre>';

print_r( $fruit_set );

print '</pre>';


print 'size of fruit set: ' . count($fruit_set);

print '<br />';

foreach ($fruit_set as $f => $c) {
    
    print $f . ' : ' . $c;
    print '<br />';
}



//remove an elem
if ( isset($fruit_set['apple']) )
    unset ($fruit_set['apple']);


print '<pre>';
print_r( $fruit_set );
print '</pre>';


/*
$test_ar = [ 10, 15, 20, 25 ];

if ( in_array(20, $test_ar) )
        print 'In array true';
else
    print 'In array false';
*/
/*

if ( array_key_exists('banana', $fruit_set) )
        print 'banana is available';

*/
function query_fruit($fn) {
    
    $default = 'No fruit available with name: ' . $fn;
    
    //fruit store
    $fruit_store = [

        'apple'=> 'red',
        'banana'=> 'yellow',
        'grapes'=> 'green' ,
        'berries' => 'blue' ,
        
    ];
    
    
    $result = false;
        if(array_key_exists($fn, $fruit_store)) {
            
            $result = '<p style="font-weight:bold; color: '. $fruit_store[$fn] .'">' . $fn . '</p>';
            
        }
        
    
    
    print $result ? $result : $default;
    
}

query_fruit('apple');

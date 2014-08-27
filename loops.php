<?php

/* 
 * Loops.
 */


//for loop - general purpose
for ($fi=0; $fi<5; $fi++) {
    
    
    
    if ( $fi == 3 )
        break;
    
    print 'Running for loop - ' . ($fi+1);
    print '<br />';
    
    
    
}


print '<hr />';


//while loop - database resultset looping
$wi=0;

while ( $wi<5 ) {
    
    print 'Running while loop - ' . ($wi+1);
    print '<br />';
    
    $wi++;
}




//do while loop
print '<hr />';

$dwi=10;

do {
    
    print 'Running do while loop - ' . ($dwi+1);
    print '<br />';
    
    $dwi++;
    
} while ( $dwi < 5 );




//enhenced for loop - array & object looping

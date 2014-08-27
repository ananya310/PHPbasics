<?php

/* 
 * PHP constant.
 */


//define('MY_NAME', 'Rinku Choudhury');


if ( !defined('MY_NAME') )
    define('MY_NAME', 'Arindam');

print MY_NAME;


print '<hr />';


//magic constant

print 'Absolute path upto the current script: ' . __FILE__;

print '<br />';


print 'Absolute path upto current directory: ' . __DIR__;

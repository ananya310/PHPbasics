<?php

/* 
 * PHP date and time stamp.
 */

date_default_timezone_set('Asia/Kolkata');

print '<h3>PHP date and time stamp.</h3>';


$time_stamp = time();

print $time_stamp;

print '<br />';

print date("d F Y g:i:s A", 102695936);

<?php
// File to store the visit count
$counterFile = 'counter.txt';

// Read the current count
$count = file_get_contents($counterFile);

// Increment the count
$count++;

// Write the new count back to the file
file_put_contents($counterFile, $count);

// Output the count
echo $count;
?>
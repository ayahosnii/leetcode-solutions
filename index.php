<?php

// Include Composer's autoloader

use src\datastructure\Heap\Solution;

require_once __DIR__ . '/vendor/autoload.php';


// Create an instance of the Solution class
$solution = new Solution();

// Define an array of input data
$nums = [4, 2, 7, 1, 5, 3];

// Call the numberGame method with the input data
$output = $solution->numberGame($nums);

// Output the result
print_r($output);

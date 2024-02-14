<?php

// Include Composer's autoloader

use src\datastructure\Heap\DeleteGreatest;
use src\datastructure\Heap\MaximumProduct;
use src\datastructure\Heap\Solution;

require_once __DIR__ . '/vendor/autoload.php';


// Create an instance of the Solution class
$solution = new Solution();
$max_product = new MaximumProduct();
$delete_greatest = new DeleteGreatest();

// Define an array of input data
$nums = [4, 2, 7, 1, 5, 3];
$grid = [[1,2,4],[3,3,1]];

// Call the numberGame method with the input data
//$output = $solution->numberGame($nums);
//$output = $max_product->maxProduct($nums);
$output = $delete_greatest->deleteGreatestValue($grid);


// Output the result
print_r($output);

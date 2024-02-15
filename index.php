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
$grid1 = [[1,2,4],[3,3,1]];
$grid2 = [[35,52,74,92,25],[65,77,1,73,32],[43,68,8,100,84],[80,14,88,42,53],[98,69,64,40,60]];

// Call the numberGame method with the input data
//$output = $solution->numberGame($nums);
//$output = $max_product->maxProduct($nums);
$output = $delete_greatest->deleteGreatestValue($grid2);


// Output the result
print_r($output);

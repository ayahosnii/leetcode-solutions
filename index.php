<?php

// Include Composer's autoloader

use src\datastructure\HashTable\GoodPairs;
use src\datastructure\Heap\DeleteGreatest;
use src\datastructure\Heap\MaximumProduct;
use src\datastructure\Heap\Solution;
use src\datastructure\Heap\WeakestRows;

require_once __DIR__ . '/vendor/autoload.php';


// Create an instance of the Solution class
$solution = new Solution();
$max_product = new MaximumProduct();
$delete_greatest = new DeleteGreatest();
$weakest_row = new WeakestRows();

// Define an array of input data
$nums = [4, 2, 7, 1, 5, 3];
$grid1 = [[1,2,4],[3,3,1]];
$grid2 = [[35,52,74,92,25],[65,77,1,73,32],[43,68,8,100,84],[80,14,88,42,53],[98,69,64,40,60]];

// Call the numberGame method with the input data
//$output = $solution->numberGame($nums);
//$output = $max_product->maxProduct($nums);
//$output = $delete_greatest->deleteGreatestValueValue($grid2);
$mat =
    [[1,1,0,0,0],
        [1,1,1,1,0],
        [1,0,0,0,0],
        [1,1,0,0,0],
        [1,1,1,1,1]];

$k = 3;

$output = $weakest_row->kWeakestRows($mat, $k);


// Output the result
//print_r($output);
######################################################################################
#Hashtable:
$nums = [1,2,3,1,1,3];
$good_pairs = new GoodPairs();
$output = $good_pairs->numIdenticalPairs($nums);
//print_r($output);

#####################################################
$jewels1 = "aA";
$stones1 = "aAAbbbb";
$jewelsStons = new \src\datastructure\HashTable\JewelsStones();
echo $jewelsStons->numJewelsInStones($jewels1, $stones1) . "\n";

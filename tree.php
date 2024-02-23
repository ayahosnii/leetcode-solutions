<?php

use src\datastructure\Tree\RangeSumBST;
use src\datastructure\Tree\TreeNode;

require_once __DIR__ . '/vendor/autoload.php';


$root1 = new TreeNode(10);
$root1->left = new TreeNode(5);
$root1->right = new TreeNode(15);
$root1->left->left = new TreeNode(3);
$root1->left->right = new TreeNode(7);
$root1->right->right = new TreeNode(18);

$solution = new RangeSumBST();

// Call the rangeSumBST method with the root node and range values
$sum1 = $solution->rangeSumBST($root1, 7, 15);

echo $sum1;
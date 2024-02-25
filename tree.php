<?php

use src\datastructure\Tree\InsertionBST;
use src\datastructure\Tree\RangeSumBST;
use src\datastructure\Tree\RootEqualSumChildren;
use src\datastructure\Tree\SearchBST;
use src\datastructure\Tree\TreeNode;

require_once __DIR__ . '/vendor/autoload.php';


//$root1 = new TreeNode(10);
//$root1->left = new TreeNode(5);
//$root1->right = new TreeNode(15);
//$root1->left->left = new TreeNode(3);
//$root1->left->right = new TreeNode(7);
//$root1->right->right = new TreeNode(18);

//$solution = new RangeSumBST();
//$solution = new RootEqualSumChildren();
//$solution = new RootEqualSumChildren();


//$sum1 = $solution->checkTree($root1);

//echo $sum1;



$root = new TreeNode(4);
$root->left = new TreeNode(2);
$root->right = new TreeNode(7);
$root->left->left = new TreeNode(1);
$root->left->right = new TreeNode(3);


$searchBST = new SearchBST();
$subtree = $searchBST->subtreeWithVal($root, 2);
print_r($subtree);

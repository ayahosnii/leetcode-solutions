<?php

namespace src\datastructure\Tree;

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;        // Value of the node
 *     public $left = null;       // Reference to the left child node
 *     public $right = null;      // Reference to the right child node
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;     // Initialize the node with a value
 *         $this->left = $left;   // Initialize the left child
 *         $this->right = $right; // Initialize the right child
 *     }
 * }
 */
class RangeSumBST {

    /**
     * @param TreeNode $root       // Root node of the binary search tree
     * @param Integer $low         // Lower bound of the range
     * @param Integer $high        // Upper bound of the range
     * @return Integer             // Sum of values of nodes within the range
     */
    function rangeSumBST($root, $low, $high) {
        // Base case: if the root is null, return 0 (no nodes to process)
        if ($root === null) {
            return 0;
        }

        $sum = 0;

        // Check if the value of the root node is within the specified range
        if ($root->val >= $low && $root->val <= $high) {
            $sum += $root->val;  // Add the value of the root node to the sum
        }

        // If the value of the root node is greater than the lower bound,
        // explore the left subtree recursively
        if ($root->val > $low) {
            $sum += $this->rangeSumBST($root->left, $low, $high);
        }

        // If the value of the root node is less than the upper bound,
        // explore the right subtree recursively
        if ($root->val < $high) {
            $sum += $this->rangeSumBST($root->right, $low, $high);
        }

        return $sum;
    }
}

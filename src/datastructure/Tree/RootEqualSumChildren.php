<?php

namespace src\datastructure\Tree;


/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class RootEqualSumChildren {

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function checkTree($root) {
        if ($root === null) {
            return false;
        }

        $sumChildren = ($root->left !== null ? $root->left->val : 0) + ($root->right !== null ? $root->right->val : 0);

        return $root->val === $sumChildren;
    }
}
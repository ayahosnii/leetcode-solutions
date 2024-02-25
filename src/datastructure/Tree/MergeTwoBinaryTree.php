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
class MergeTwoBinaryTree {

    /**
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return TreeNode
     */


    function mergeTrees($root1, $root2) {
        if ($root1 === null) {
            return $root2;
        }

        if ($root2 === null) {
            return $root1;
        }

        $merged = new TreeNode($root1->val + $root2->val);
        $merged->left = $this->mergeTrees($root1->left, $root2->left);
        $merged->right = $this->mergeTrees($root1->right, $root2->right);

        return $merged;
    }
}
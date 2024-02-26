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
class IncreasingOrderSearchTree {

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function increasingBST($root) {
        $newTree = new TreeNode();
        $current = $newTree;
        $this->rearrange($root, $current);
        return $newTree->right;
    }

    function rearrange($node, &$current)
    {
        if ($node === null) return;
        $this->rearrange($node->left, $current);

        $node->left = null;

        $current->right = $node;
        $current = $node;
        $this->rearrange($node->right, $current);
    }}
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
class SearchBST
{
    /**
     * @param TreeNode $root
     * @param Integer $val
     * @return TreeNode
     */
    public $root = null;

    public function searchBST($root, $val) {
        if ($root === null || $root->val === $val) {
            return $root;
        }

        return ($val < $root->val)
            ? $this->searchBST($root->left, $val)
            : $this->searchBST($root->right, $val) ;
    }

    public function subtreeWithVal($root, $val) {
        $node = $this->searchBST($root, $val);
        return $this->getSubTree($node);
    }

    private function getSubTree($node) {
        if ($node === null) {
            return null;
        }

        $subTree = new TreeNode($node->val);
        $subTree->left = $this->getSubTree($node->left);
        $subTree->right = $this->getSubTree($node->right);

        return $subTree;
    }
}

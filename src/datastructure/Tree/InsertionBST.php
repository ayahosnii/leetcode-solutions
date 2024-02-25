<?php

namespace src\datastructure\Tree;

class InsertionBST {
    public $root = null;

    public function insert($val) {
        $this->root = $this->insertRecursive($this->root, $val);
    }

    private function insertRecursive($root, $val) {
        if ($root === null) {
            return new TreeNode($val);
        }

        if ($val < $root->val) {
            $root->left = $this->insertRecursive($root->left, $val);
        } else {
            $root->right = $this->insertRecursive($root->right, $val);
        }

        return $root;
    }
}
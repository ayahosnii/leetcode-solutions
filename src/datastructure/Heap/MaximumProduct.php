<?php

namespace src\datastructure\Heap;

use SplMaxHeap;

/*
 * The Problem will be found:
 * https://leetcode.com/problems/maximum-product-of-two-elements-in-an-array/
 * */
class MaximumProduct
{
    public function maxProduct($nums) {
        // Initialize a max heap
        $maxHeap = new SplMaxHeap();

        // Insert all elements of $nums into the max heap
        foreach ($nums as $num) {
            $maxHeap->insert($num);
        }

        // Extract the two largest elements from the max heap
        $max1 = $maxHeap->extract();
        $max2 = $maxHeap->extract();

        // Calculate the maximum product
        return ($max1 - 1) * ($max2 - 1);
    }
}
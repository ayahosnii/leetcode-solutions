<?php

namespace src\datastructure\Heap;

use SplMinHeap;

class Solution {
    public function numberGame($nums) {
        // Create a new instance of SplMinHeap to use as a priority queue
        $minHeap = new SplMinHeap();

        // Insert each element of the given array $nums into the priority queue
        foreach ($nums as $num) {
            $minHeap->insert($num);
        }

        // Initialize an empty array to store the result
        $arr = [];
        // Initialize a counter variable
        $i = 0;

        // Continue the loop until the priority queue is empty
        while (!$minHeap->isEmpty()) {
            // Extract the smallest element from the priority queue
            $a = $minHeap->extract();
            // Store the next smallest element in the result array
            $arr[$i++] = $minHeap->extract();
            // Store the current smallest element in the result array
            $arr[$i++] = $a;
        }

        // Return the resulting array
        return $arr;
    }
}

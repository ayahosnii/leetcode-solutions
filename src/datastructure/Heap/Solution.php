<?php

namespace src\datastructure\Heap;

use SplMinHeap;

class Solution {
    public function numberGame($nums) {
        // Create a new instance of SplMinHeap to use as a priority queue
        $pq = new SplMinHeap();

        // Insert each element of the given array $nums into the priority queue
        foreach ($nums as $x) {
            $pq->insert($x);
        }

        // Initialize an empty array to store the result
        $arr = [];
        // Initialize a counter variable
        $i = 0;

        // Continue the loop until the priority queue is empty
        while (!$pq->isEmpty()) {
            // Extract the smallest element from the priority queue
            $a = $pq->extract();
            // Store the next smallest element in the result array
            $arr[$i++] = $pq->extract();
            // Store the current smallest element in the result array
            $arr[$i++] = $a;
        }

        // Return the resulting array
        return $arr;
    }
}

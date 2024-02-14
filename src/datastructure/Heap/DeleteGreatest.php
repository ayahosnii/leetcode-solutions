<?php

namespace src\datastructure\Heap;

use SplMaxHeap;

class DeleteGreatest
{
    public function deleteGreatestValue($grid) {
        // Initialize answer
        $answer = 0;

        // Extract the first and second arrays from the grid
        $firstGrid = $grid[0];
        $secondGrid = $grid[1];

        // Loop until both arrays become empty
        while (!empty($firstGrid) || !empty($secondGrid)) {
            $maxHeap = new SplMaxHeap();

            // Insert all elements of $firstGrid into the max heap
            foreach ($firstGrid as $fg) {
                $maxHeap->insert($fg);
            }

            // Extract the largest element from the max heap (max1)
            $max1 = !empty($firstGrid) ? $maxHeap->extract() : 0;

            if (!empty($firstGrid)) {
                // Find the index of max1 in $firstGrid and remove it
                $max1Index = array_search($max1, $firstGrid);
                unset($firstGrid[$max1Index]);
            }

            // Clear the max heap
            $maxHeap = new SplMaxHeap();

            // Insert all elements of $secondGrid into the max heap
            foreach ($secondGrid as $sg) {
                $maxHeap->insert($sg);
            }

            // Extract the largest element from the max heap (max2)
            $max2 = !empty($secondGrid) ? $maxHeap->extract() : 0;

            if (!empty($secondGrid)) {
                // Find the index of max2 in $secondGrid and remove it
                $max2Index = array_search($max2, $secondGrid);
                unset($secondGrid[$max2Index]);
            }

            // Compare max1 and max2, add the larger one to $answer
            $answer += max($max1, $max2);
        }

        // Return the final answer
        return $answer;
    }
}

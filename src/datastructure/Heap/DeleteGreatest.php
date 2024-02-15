<?php

namespace src\datastructure\Heap;

use SplMaxHeap;

class DeleteGreatest
{
    public function deleteGreatestValue($grid) {
        $answer = 0;
        $maxValues = array();
        $rowHasValues = true;

        // Repeat until all rows become empty
        while ($rowHasValues) {
            $rowHasValues = false;

            // Loop through each element of $grid
            foreach ($grid as &$row) {
                if (!empty($row)) {
                    $rowHasValues = true;

                    // Create a max heap
                    $maxHeap = new SplMaxHeap();

                    // Insert all elements of $row into the max heap
                    foreach ($row as $element) {
                        $maxHeap->insert($element);
                    }

                    // Extract the largest element from the max heap and store it in $maxValue
                    $maxValue = $maxHeap->extract();
                    $maxValues[] = $maxValue;

                    // Find the index of $maxValue in $row
                    $maxIndex = array_search($maxValue, $row);
                    unset($row[$maxIndex]);

                }
            }

            // Add the maximum value from $maxValues to $answer
            if (!empty($maxValues)) {
                $answer += max($maxValues);
            }

            // Clear $maxValues for the next iteration
            $maxValues = array();
        }

        return $answer;
    }
}

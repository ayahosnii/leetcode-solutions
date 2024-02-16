<?php

namespace src\datastructure\Heap;

class WeakestRows
{
    /**
     * @param Integer[][] $mat
     * @param Integer $k
     * @return Integer[]
     */
    function kWeakestRows($mat, $k) {
        $minHeap = new \SplMinHeap();

        // Insert row indices along with their sums into the min heap
        foreach ($mat as $index => $row) {
            $sum = array_sum(array_map('intval', $row));
            $minHeap->insert([$sum, $index]);
        }

        // Extract the indices of the weakest rows based on the sorted sums
        $weakestRows = array();
        while ($minHeap->count() > 0 && count($weakestRows) < $k) {
            [, $index] = $minHeap->extract();
            $weakestRows[] = $index;
        }

        return $weakestRows;
    }
}
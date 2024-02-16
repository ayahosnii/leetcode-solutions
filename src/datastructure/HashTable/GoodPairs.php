<?php

namespace src\datastructure\HashTable;

class GoodPairs
{
    function numIdenticalPairs($nums) {
        $hashTable = [];

        // Count occurrences of each element in the array
        foreach ($nums as $num) {
            if (isset($hashTable[$num])) {
                $hashTable[$num]++;
            } else {
                $hashTable[$num] = 1;
            }
        }

        $goodPairs = 0;

        // Calculate number of good pairs using the Hashtable
        foreach ($hashTable as $count) {
            $goodPairs += ($count * ($count - 1)) / 2;
        }

        return $goodPairs;
    }
}
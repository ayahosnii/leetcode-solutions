<?php

namespace src\datastructure\LinkedList;

class BinaryNumberToInteger
{
    function getDecimalValue($head) {

        $decimalValue = 0;

        // Traverse the linked list
        while ($head != null) {

            // Update the decimal value by shifting left
            // (equivalent to multiplying by 2)
            // and adding the current node's value

            $decimalValue = ($decimalValue << 1) + $head->val;

            $head = $head->next;
        }

        return $decimalValue;
    }
}
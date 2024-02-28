<?php

use src\datastructure\LinkedList\BinaryNumberToInteger;
use src\datastructure\LinkedList\ListNode;


require_once __DIR__ . '/vendor/autoload.php';



// Create the nodes with values 1, 0, and 1
$node1 = new ListNode(1);
$node2 = new ListNode(0);
$node3 = new ListNode(1);

// Link the nodes together
$node1->next = $node2;
$node2->next = $node3;


// Create an instance of BinaryNumberToInteger
$bti = new BinaryNumberToInteger();

// Get the decimal value of the linked list
$result = $bti->getDecimalValue($node1);

echo "Decimal value: $result";

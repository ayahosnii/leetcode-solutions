<?php

namespace src\datastructure\HashTable;

class JewelsStones
{
    /**
     * @param String $jewels
     * @param String $stones
     * @return Integer
     */
    function numJewelsInStones($jewels, $stones) {
        $count = 0;
        $jewels_array = array_flip(str_split($jewels));

        for ($i = 0; $i < strlen($stones); $i++){
            if (isset($jewels_array[$stones[$i]])){
                $count++;
            }
        }
        return $count;
    }
}
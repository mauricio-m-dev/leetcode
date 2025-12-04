<?php

class Solution {

    function strStr($haystack, $needle) {

        $size_word = strlen($haystack);
        $size_next = strlen($needle);
    
        for ($i = 0; $i <= $size_word - $size_next; $i++) {

            $match = true;

            for ($e = 0; $e < $size_next; $e++) {
                if ($haystack[$i + $e] !== $needle[$e]) {
                    $match = false;
                    break;
                }
            }

            if ($match) {
                return $i;
            }
        }

        return -1;
    }
}

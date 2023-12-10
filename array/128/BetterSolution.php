<?php

// O(n)
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums) {
        $uniqueNums = [];
        foreach ($nums as $num) {
            $uniqueNums[$num] = true;
        }
        $longestSequence = 0;
        foreach ($nums as $num) {
            $sequenceLength = 1;
            if (!isset($uniqueNums[$num - 1])) {
                while (isset($uniqueNums[$num + $sequenceLength])) {
                    $sequenceLength++;
                }
            }
            $longestSequence = max($sequenceLength, $longestSequence);
        }
        return $longestSequence;
   }
}

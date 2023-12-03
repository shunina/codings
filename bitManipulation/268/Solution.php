<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumber($nums) {
        sort($nums);
        $length = count($nums);
        for ($i=0; $i <= $length; $i++){
            if($i !== $nums[$i]){
                return $i;
            }
        }
    }
}

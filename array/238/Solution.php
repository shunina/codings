<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums) {
        $count = count($nums);
        $left=[];
        $right=[];
        $left[0]=1;
        $right[$count-1]=1;

        for($i=1; $i < $count; $i++){
            $left[$i] = $nums[$i-1] * $left[$i-1];
        }

        for($i=$count-2; $i > -1; $i--){
            $right[$i] = $right[$i+1] * $nums[$i+1];
        } 

        $result = [];
        for($i=0; $i < $count; $i++){
            $result[] = $left[$i] * $right[$i];
        }      
        return $result;
    }
}

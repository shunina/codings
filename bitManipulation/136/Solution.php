<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $store = [];
        for($i=0; $i < count($nums); $i++){
            if(isset($store[$nums[$i]])){
                unset($store[$nums[$i]]);
            } else {
                $store[$nums[$i]] = true;
            }
        }
        return array_keys($store)[0];
    }
}

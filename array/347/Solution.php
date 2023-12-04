<?php 

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k) {
        $store = [];
        for($i=0;$i<count($nums);$i++){
            if(isset($store[$nums[$i]])){
                $store[$nums[$i]] += 1;
            }else {
                $store[$nums[$i]] = 1;
            }
        }
        asort($store);
        return array_splice(array_keys($store), count($store)-$k, $k);
    }
}

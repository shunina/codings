<?php

class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $res = [];
        for($i=0;$i<count($numbers);$i++){
            if(isset($res[$numbers[$i]])){
                return [$res[$numbers[$i]]+1, $i+1];
            } else {
                $res[$target-$numbers[$i]] = $i;
            }
        }
    }
}

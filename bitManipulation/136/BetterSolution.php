<?php

class BetterSolution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function singleNumber($nums) {
        $res = 0;
        for($i=0; $i < count($nums); $i++){
            $res ^= $nums[$i];
        }
        return $res;
    }
}

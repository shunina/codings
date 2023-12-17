<?php

class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function trap($height) {
        $l = 0;
        $r = count($height)-1;
        $leftMax = $height[$l];
        $rightMax = $height[$r];
        $res = 0;
        while ($l < $r){
            if($leftMax < $rightMax){
                $l++;
                $leftMax = max($leftMax, $height[$l]);
                $res += $leftMax - $height[$l];
            } else {
                $r--;
                $rightMax = max($rightMax, $height[$r]);
                $res += $rightMax - $height[$r];
            }
        }
        return $res;
    }
}

<?php

// O(n)
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $l = 0;
        $r = count($height) - 1;
        $res = 0;
        while($l < $r){
            if($res < (min($height[$l], $height[$r]) * ($r-$l))){
                $res = min($height[$l], $height[$r]) * ($r-$l);
            }
            if($height[$l] > $height[$r]){
                $r--;
                $currentRight = $height[$r];
                while($currentRight > $height[$r] && $l < $r){
                    $r--;
                }
            } else {
                $l++;
                $currentLeft = $height[$l];
                while($currentLeft > $height[$l] && $l < $r){
                    $l++;
                }
            }
        }
        return $res;
        
    }
}

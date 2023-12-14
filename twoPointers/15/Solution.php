<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
        $length = count($nums);
        sort($nums);
        $pointer = 0;
        $res = [];
        $used = [];
        while($pointer < $length-2){
            $firstNum = $nums[$pointer];
            $l = $pointer + 1;
            $r = $length - 1;
            while($l!==$r){
                if($nums[$l] + $nums[$r] < -($firstNum)){
                    $l++;
                } else if ($nums[$l] + $nums[$r] > -($firstNum)){
                    $r--;
                } else {
                    if(isset($used[$nums[$r] . '/' . $nums[$l]])){
                        $r--;
                        continue;
                    }
                    $res[] = [$firstNum, $nums[$r], $nums[$l]];
                    $used[$nums[$r] . '/' . $nums[$l]]=true;
                    $r--;
                }
            }
            $pointer++;
        }
        return $res;
    }
}

<?php

class Solution {

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits) {
        $length = count($digits)-1;
        $digits[$length] += 1;
        if($digits[$length] <= 9){
            return $digits;
        }

        for($i=$length; $i > -1; $i--){
            if($digits[$i] <= 9){
                return $digits;
            }
            $digits[$i] = 0;
            if($i == 0){
                array_unshift($digits, 1);
                return $digits;
            }
            $digits[$i-1] += 1;
        }
        return $disits;
    }
}

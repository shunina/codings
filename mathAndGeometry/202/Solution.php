<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $visits = [];
        while (!isset($visits[$sum])){
            $sum = $this->sumOfSquare($n);
            if($sum == 1){
                return true;
            }
            $visits[$sum] = true;
        }        
        return false;
    }

    function sumOfSquare(int $number){
        $output = 0;
        while ($number){
            $digit = $number%10;
            $digit = $digit * $digit;
            $output += $digit;
            $number = $number/10;
        }
        return $output;
    }
}

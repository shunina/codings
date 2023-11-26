<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        $visits = [];        
        while (!isset($visits[$n]) && $n!=1){
            $visits[$n] = true;
            $n = $this->sumOfSquare($n);
        }        
        return $n==1;
    }

    function sumOfSquare(int $n){
        $output = 0;
        while ($n){
            $digit = $n%10;
            $digit = $digit * $digit;
            $output += $digit;
            $n =  (int)($n/10);
        }
        return $output;
    }
}

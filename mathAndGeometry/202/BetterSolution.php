<?php

class BetterSolution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
         $seen = array();
        while ($n != 1 && !isset($seen[$n])) {
            $seen[$n] = true;
            $n = $this->getSumOfSquares($n);
        }
        return $n == 1;
    }
    private function getSumOfSquares($n) {
        $sum = 0;
        while ($n > 0) {
            $digit = $n % 10;
            $sum += $digit * $digit;
            $n = (int)($n / 10);
        }
        return $sum;
    }
}

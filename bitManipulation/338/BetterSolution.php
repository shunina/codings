<?php

class BetterSolution {

    /**
     * @param Integer $n
     * @return Integer[]
     */
    function countBits($n) {
        $dp = [0];
        $offset = 1;
        for ($i=1; $i<=$n; $i++){
            if($i == $offset * 2){
                $offset = $i;
            }
            $dp[$i]= 1 + $dp[$i - $offset];
        }
        return $dp;
    }
}

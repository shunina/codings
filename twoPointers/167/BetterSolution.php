<?php

class BetterSolution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($numbers, $target) {
        $l = 0;
        $r = count($numbers) - 1;
        while(($sum = $numbers[$l] + $numbers[$r]) !=  $target){
            ($sum > $target) ? $r-- : $l++;
        }
        return [$l + 1, $r + 1];
    }
}

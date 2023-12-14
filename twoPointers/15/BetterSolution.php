<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function threeSum($nums) {
       sort($nums);
        $results = [];
        $n = count($nums);

        for ($i = 0; $i < $n - 2; $i++) {
            if ($i > 0 && $nums[$i] === $nums[$i - 1]) {
                continue;
            }
            $j = $i + 1;
            $k = $n - 1;
            while ($j < $k) {
                $sum = $nums[$i] + $nums[$j] + $nums[$k];
                if ($sum == 0) {
                    $results[] = [$nums[$i], $nums[$j], $nums[$k]];
                    while ($j < $k && $nums[$j] == $nums[$j + 1]) {
                        $j++;
                    }
                    while ($j < $k && $nums[$k] == $nums[$k - 1]) {
                        $k--;
                    }

                    $j++;
                    $k--;
                } elseif ($sum < 0) {
                    $j++;
                } else {
                    $k--;
                }
            }
        }
        return $results;
   }
}

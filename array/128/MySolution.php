<?php

// O(nlogn)
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function longestConsecutive($nums) {
        $length = count($nums);
        if($length === 0) return 0;
        sort($nums);
        $heap = new SplMaxHeap();
        $heap->insert(1);
        $counter = 1;
        $previousValue = pow(10, 10);
        for ($i=0;$i<$length;$i++){
            if($nums[$i]-$previousValue===1){
                $counter++;
                if($i===$length-1){
                    $heap->insert($counter);
                }
            } elseif($nums[$i]===$previousValue) {
                if($i===$length-1){
                    $heap->insert($counter);
                }
                continue;
            } else {
                $heap->insert($counter);
                $counter=1;
            }
            $previousValue = $nums[$i];
        }
        return $heap->top();
    }
}

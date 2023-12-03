<?php 


class BetterSolutions {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function missingNumberByMath($nums) {
        $length = count($nums);
        $oriSum = (($length + 1) * $length)/2;
        $currentSum = array_sum($nums);
        return $oriSum - $currentSum;
    }

    function missingNumberWithBitManupulation($num){
        $length = count($nums);
        $res = $length;
        for($i=0;$i < $length; $i++){
            $res ^= $nums[$i] ^ $i;
        }
        return $res;
    }
}

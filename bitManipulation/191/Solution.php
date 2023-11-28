<? php

class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function hammingWeight($n) {
        $count = 0;
        while($n){
            $count+=$n%2;
            $n = $n >> 1;
        }
        return $count;
    }
}

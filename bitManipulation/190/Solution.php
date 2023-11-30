<?php

class Solution {
    /**
     * @param Integer $n
     * @return Integer
     */
    function reverseBits($n) {
        for ($i=0;$i<32;$i++){
            $bit = ($n>>$i) & 1;
            $res = $res | ($bit<<(31-$i));
        }
        return $res;
    }
}

<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $store = [];
        $res = 0;
        $l = 0;
        for ($i=0;$i<strlen($s); $i++){
            while(isset($store[$s[$i]])){
                unset($store[$s[$l]]);
                $l++;
            }
            $store[$s[$i]] = true;
            $res = max($res, $i - $l + 1);
        }
        return $res;
    }
}

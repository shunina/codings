<?php

class Solution {

    /**
     * @param String $s
     * @param Integer $k
     * @return Integer
     */
    function characterReplacement($s, $k) {
        $count = [];
        $res = 0;
        $l = 0;
        for ($r=0;$r<strlen($s); $r++){
            $count[$s[$r]] = 1 + ($count[$s[$r]] ?? 0);
            while((($r - $l + 1) - max(array_values($count))) > $k){
                $count[$s[$l]] = $count[$s[$l]]-1;
                $l++;
            }
            $res = max($res, $r - $l + 1);
        }
        return $res;
    }
}

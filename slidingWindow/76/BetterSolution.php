<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    function minWindow($s, $t) {
        $sLength = strlen($s);
        $tLength = strlen($t);

        if($sLength < $tLength){
            return "";
        }

        $countT = [];
        $window=[];
        for($i=0;$i<$tLength;$i++){
            $countT[$t[$i]] = ($countT[$t[$i]] ?? 0)+1;
        }

        foreach($countT as $key=>$val){
            $window[$key] = 0;
        }
        $have = 0;
        $need = sizeof($countT);
        $l=0;
        $r=0;
        $res = [-1,-1];
        $resLen = PHP_INT_MAX;
        while($r < strlen($s)){
            $char = $s[$r];
            if(isset($window[$char]))
                $window[$char]++;
            else
                $window[$char] = 1;
            if($window[$char] == $countT[$char])
                $have++;
             while($have == $need && $l<=$r){
                 if(($r-$l +1) < $resLen){
                     $res[0] = $l;
                     $res[1] = $r;
                     $resLen = $r - $l + 1;
                 }
                 $window[$s[$l]]--;
                if(
                    isset($window[$s[$l]]) &&
                    ($window[$s[$l]] < $countT[$s[$l]])
                ){
                    $have--;
                }
                $l++;
             }
            $r++;
        }
        if($resLen == PHP_INT_MAX){
            return "";
        } else{
            return substr($s, $res[0], $resLen);
        }
    }
}

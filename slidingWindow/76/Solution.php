<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return String
     */
    // memory over solution
    function minWindow($s, $t) {
        $sLength = strlen($s);
        $tLength = strlen($t);

        if($sLength < $tLength){
            return "";
        }

        $countHashMap = [];
        for($i=0;$i<$tLength;$i++){
            $countHashMap[$t[$i]] = ($countHashMap[$t[$i]] ?? 0)+1;
        }

        $r = 0;
        $res = '';
        $i=0;
        for($i=0;$i<$sLength;$i++){
            if(!isset($countHashMap[$s[$i]])){
                continue;
            }

            $cloneCountHashMap = $countHashMap;
            $r = $i;
            while($r < $sLength){
                if(isset($cloneCountHashMap[$s[$r]])){
                    $cloneCountHashMap[$s[$r]] = $cloneCountHashMap[$s[$r]] - 1;
                    if($cloneCountHashMap[$s[$r]] === 0){
                        unset($cloneCountHashMap[$s[$r]]);
                        if(
                            empty($cloneCountHashMap) &&
                            ($res == '' || ($r - $i) < strlen($res))
                        ){
                            $res = substr($s, $i, $r - $i + 1);
                            break;
                        }
                    }
                }
                $r++;
            }
            $i = $r;
        }
        return $res;
    }
}

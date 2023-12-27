<?php

class Solution {

    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function checkInclusion($s1, $s2) {
        $count = [];
        foreach(str_split($s1) as $s){
            $count[$s] = ($count[$s] ?? 0) + 1;
        }

        $length = strlen($s2);
        $r = 0;
        for($i=0;$i < $length; $i++){
            while(!isset($count[$s2[$i]]) && $i < $length){
                $i++;
            }

            $r = $i;
            $cloneCount = $count;
            while(isset($count[$s2[$r]]) && $r < $length){
                $cloneCount[$s2[$r]] = $cloneCount[$s2[$r]] - 1;
                if($cloneCount[$s2[$r]] === 0){
                    unset($cloneCount[$s2[$r]]);
                }
                if(empty($cloneCount)){
                    return true;
                }
                $r++;
            }            
        }
        return false;
    }
}

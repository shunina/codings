<?php 

class Solution {

    /**
     * @param String $s1
     * @param String $s2
     * @return Boolean
     */
    function checkInclusion($s1, $s2) {
	    $s1Length = strlen($s1);
        $s1Map = $this->getMap($s1,$s1Length);
        $s2Map = $this->getMap($s2,$s1Length);
        for($i=0;$i<(strlen($s2)-$s1Length+1); $i++){
            if($s1Map==$s2Map){
                return true;
            }
            --$s2Map[ord($s2[$i])-ord('a')];
            ++$s2Map[ord($s2[$i+$s1Length])-ord('a')];
        }
	    return false;
    }

    function getMap($s, $l) {
        $count = array_fill(0, 26, 0);
        for ($i = 0; $i < $l; $i++) {
            $index = ord($s[$i]) - ord('a');
            $count[$index] += 1;
        }
        return $count;
    }
}

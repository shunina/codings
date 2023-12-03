<?php

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $result = [];
        for($i=0;$i<count($strs);$i++){
            $wordArray = str_split($strs[$i]);
            sort($wordArray);
            $wordSorted = implode('', $wordArray);
            $result[$wordSorted][] = $strs[$i];
        }
        return $result;
    }
}

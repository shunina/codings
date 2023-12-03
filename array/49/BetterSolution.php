<?php 

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $result = [];
        for($i=0;$i<count($strs);$i++){
            $key = [];
            foreach(str_split($strs[$i]) as $str){
                $number = ord($str) - ord('a');
                if(isset($key[$number])){
                    $key[$number] += 1;
                } else {
                    $key[$number] = 1;
                }
            }
            $result[print_r($key, true)][] = $strs[$i];
        }

        return $result;
    }
}

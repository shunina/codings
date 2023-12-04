<?php 

class Solution {

    /**
     * @param String[] $strs
     * @return String[][]
     */
    function groupAnagrams($strs) {
        $array = array_fill(0, 26, 0);
        $result = [];
        for($i=0;$i<count($strs);$i++){
            $key = $array;
            foreach(str_split($strs[$i]) as $str){
                $number = ord($str) - ord('a');
                if(isset($key[$number])){
                    $key[$number] += 1;
                } else {
                    $key[$number] = 1;
                }
            }
            $result[http_build_query($key)][] = $strs[$i];
        }

        return $result;
    }
}

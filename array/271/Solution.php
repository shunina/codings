<?php

class Codec {
    /**
     * @param String[] $strs
     * @return String
     */
    function encode($strs) {
        for ($i=0; $i<count($strs); $i++){
            $str .= strlen($strs[$i]) . '#' . $strs[$i];
        }
        return $str;
    }

    /**
     * @param String $s
     * @return String[]
     */
    function decode($s) {
        $strs = [];
        $i = 0;
        while($i < strlen($s)){
            $j = $i;
            while($s[$j] != '#'){
                $j++;
            }
            $len = intval(substr($s, $i, $j-$i));  // 要チェックポイント
            $strs[] = substr($s, $j+1, $len);
            $i = $j+1+$len;
        }
        return $strs;
    }
}

/**
 * Your Codec object will be instantiated and called as such:
 * $obj = Codec();
 * $s = $obj->encode($strs);
 * $ans = $obj->decode($s);
 */

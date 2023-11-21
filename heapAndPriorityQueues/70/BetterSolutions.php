class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        // constraint $n>0
        $result = [
            0,
            1,
            2
        ];

        if(isset($result[$n])){
            return $result[$n];
        }

        for($i=0;$i<=$n;$i++){
            if(!isset($result[$i])){
                $result[] = $result[$i-1] + $result[$i-2];
            }
        }

        return $result[$n];
    }
}

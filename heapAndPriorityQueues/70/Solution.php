class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function climbStairs($n) {
        [$one, $two] = [1, 1];
        for($i=0;$i<$n-1;$i++){
            $temp = $one;
            $one = $one + $two;
            $two = $temp;
        }
        return $one;
    }
}

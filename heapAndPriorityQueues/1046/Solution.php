class Solution {

    /**
     * @param Integer[] $stones
     * @return Integer
     */
    function lastStoneWeight($stones) {
        $maxHeap = new SplMaxHeap();
        foreach ($stones as $stone){
            $maxHeap->insert($stone);
        }
        while ($maxHeap->valid()){
            if($maxHeap->count() == 1){
                return $maxHeap->extract();
            }
            $largest = $maxHeap->extract();
            $secondLargest = $maxHeap->extract();
            if($largest >= $secondLargest){
                $maxHeap->insert($largest - $secondLargest);
            } else {
                return $largest;
            }
        }
    }
}

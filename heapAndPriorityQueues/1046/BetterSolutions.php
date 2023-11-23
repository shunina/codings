<?php

class BetterSolutions {

    function lastStoneWeight($stones) {
        $heap = new SplMaxHeap();
        foreach ($stones as $stone)
            $heap->insert($stone);
        while ($heap->count() > 1){
            $y = $heap->extract();
            $x = $heap->extract();
            if ($x != $y)
                $heap->insert($y-$x);
        }
        if ($heap->isEmpty())
            return 0;
        return $heap->extract();
    }

    function lastStoneWeightUsingArrayFunctions($stones){
        while (count($stones) > 1)
        {
            array_unique($stones);
            rsort($stones);

            $fisrt = array_shift($stones);
            $second = array_shift($stones);

            $diff = $fisrt - $second;

            if ($diff > 0) array_push($stones, $diff);
        }

        return count($stones) == 1 ? $stones[0] : 0;
    }
}



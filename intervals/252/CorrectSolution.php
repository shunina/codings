<?php

class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Boolean
     */
    function canAttendMeetings($intervals) {
        sort($intervals);
        for ($i = 0; $i < count($intervals) - 1; $i++) {
            if ($intervals[$i][1] > $intervals[$i + 1][0]) {
                return false;
            }
        }
        return true;
    }
}

class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Boolean
     */
    function canAttendMeetings($intervals) {
        $timeSlots = [];
        for($i=0; $i <= 1000000; $i++){
            $timeSlots[$i] = false;
        }

        foreach($intervals as $interval){
            for($i=1; $i<=($interval[1]-$interval[0])-1; $i++){
                if($timeSlots[$interval[0]+$i]){
                    return false;
                }
                $timeSlots[$interval[0]+$i] = true;
            }
        }
        return true;
    }
}

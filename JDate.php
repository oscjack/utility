<?php

class JDate
{
    public static function getDiffDay($start_date, $end_date)
    {
        $start_time = strtotime($start_date);
        $end_time = strtotime($end_date);

        if ($start_time > $end_time) {
            $time_diff = $start_time - $end_time;
        }else {
            $time_diff = $end_time - $start_time;
        }

        return $time_diff / (3600*24);
    }

    public static function getMonthRange()
    {
       return ['first' => date('Y-m-01'), 'last' => date('Y-m-t')];
    }
}
<?php

             

class DateTimes
{

    static function showTime()
    {
        $result = time() - (time() - 24 * 60 * 60);

        self::echoTime($result, 'seconds ago', 60);
        self::echoTime($result, 'minutes ago', 60);
        self::echoTime($result, 'hours ago', 24);
        self::echoTime($result, 'days ago', 7);
        self::echoTime($result, 'weeks ago', 52);
        self::echoTime($result, 'years ago', 1);

      
        if ($result < 60) {
            echo 'before ' . intval($result) . ' seconds';
            return;
        }

        $result = $result / 60;

        if ($result < 60) {
            echo 'before ' . intval($result) . ' minutes';
            return;
        }

        $result = $result / 60;

        if ($result < 24) {
            echo 'before ' . intval($result) . ' hours';
            return;
        }
        
        $result = $result / 24;

        if ($result < 7) {
            echo 'before ' . intval($result) . ' days';
            return;
        }

        $result = $result / 7;

        if ($result < 52) {
            echo 'before ' . intval($result) . ' weeks';
            return;
        }

        $result = $result /52;
        echo 'before'. intval($result) . ' year';
    }


    static function echoTime(&$time, $text, $deli)
    {
        if (!isset($time)) {
            return;
        }
        if ($time < $deli) {
            echo intval($time) . ' ' . $text;
            $time = null;
            return;
        }
        $time = $time / $deli;
    }
}

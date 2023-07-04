<?php

namespace App\Greeting;

class Greetings
{
    public static function getNepaliGreeting($name)
    {
        date_default_timezone_set('Asia/Kathmandu');
        $currentHour = (int)date('H');

        if ($currentHour >= 0 && $currentHour < 12) {
            $greeting = 'Good morning';
        } elseif ($currentHour >= 12 && $currentHour < 17) {
            $greeting = 'Good afternoon';
        } else {
            $greeting = 'Good evening';
        }

        return $greeting . ', ' . $name;
    }
}

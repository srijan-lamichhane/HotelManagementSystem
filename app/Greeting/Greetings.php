<?php

namespace App\Greeting;

class Greetings
{
    public static function getNepaliGreeting($name)
    {
        date_default_timezone_set('Asia/Kathmandu');
        $currentHour = (int)date('H');

        if ($currentHour >= 0 && $currentHour < 12) {
            $greeting = 'Good Morning';
        } elseif ($currentHour >= 12 && $currentHour < 17) {
            $greeting = 'Good Afternoon';
        } else {
            $greeting = 'Good Evening';
        }

        return $greeting . ', ' . $name;
    }
}

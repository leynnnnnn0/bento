<?php

namespace App\Models;

use DateTime;

class Style
{
    public static function postedTime($created_at) : string
    {
        $created_at = new DateTime($created_at);
        $currentTime = new DateTime(date('Y-m-d H:i:s'));
        return $created_at->diff($currentTime)->i;
    }
}

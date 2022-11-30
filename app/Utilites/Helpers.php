<?php

use App\Models\Setting;

class Helper {
    public static function userDefaultImage()
    {
        return asset('frontend/assets/images/users/blank.png');
    }
}

function get_setting($key){
    return Setting::value($key);
}

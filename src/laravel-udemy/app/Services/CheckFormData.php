<?php

namespace App\Services;

class CheckFormData
{
    public static function checkGender($data) {
        $gender = $data->gender === 0 ? '男性':'女性';
        return $gender;
    }

    public static function checkAge($data) {
        switch($data->age){
            case 1:
                return '~19歳';
            case 2:
                return '20~29歳';
            case 3:
                return '30~39歳';
            case 4:
                return "40~49歳";
            case 5:
                return "50~59歳";
            case 6:
                return '60歳~';
            default:
                return 'error';
        }
    }
}
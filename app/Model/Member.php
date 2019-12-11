<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public static $gender = [
        '0' => '未知',
        '1' => '男',
        '2' => '女',
    ];
}

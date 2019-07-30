<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    //tạo bảng users
    protected $table="users";
    //loại bỏ 2 trường date
    public $timestamps = false;
}

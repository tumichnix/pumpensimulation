<?php

namespace App\Models;

class User extends Model
{
    protected $fillable = [
        'first_name',
        'last_name',
        'api_key'
    ];

    protected $hidden = [];

    public static function getRules()
    {
        return [
            'first_name' => 'required',
            'last_name' => 'required',
        ];
    }
}

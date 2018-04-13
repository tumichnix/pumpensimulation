<?php

namespace App\Models;

class Project extends Model
{
    protected $fillable = [
        'name',
    ];

    protected $hidden = [];

    public static function getRules()
    {
        return [
            'name' => 'required'
        ];
    }
}

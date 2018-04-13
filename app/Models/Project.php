<?php

namespace App\Models;

class Project extends Model
{
    protected $fillable = [
        'name',
        'param_a',
        'param_b',
        'param_c',
    ];

    protected $hidden = [];

    protected $appends = [
        'calc',
    ];

    public static function getRules()
    {
        return [
            'name' => 'required',
            'param_a' => 'required',
            'param_b' => 'required',
            'param_c' => 'required',
        ];
    }

    public function getCalcAttribute()
    {
        $data = collect($this->attributes)->filter(function($value, $key) {
            return starts_with($key, 'param_');
        });
        return hash('md5', implode('', $data->toArray()));
    }

}

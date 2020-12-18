<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Template
 * @package App\Models
 * @property $name
 * @property $value
 */
class Template extends Model
{
    protected $table = 'templates';

    protected $fillable = [
        'name',
        'value'
    ];

    protected $casts = [
        'value' => 'array',
    ];
}

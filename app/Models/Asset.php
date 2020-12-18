<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Asset
 * @package App\Models
 * @property int $id
 * @property int $type_id
 * @property string $name
 *
 */
class Asset extends Model
{
    protected $table = 'assets';

    protected $fillable = [
        'name',
        'type_id',
        'image',
        'description',
        'code',
        'barcode',
        'status_id',
        'something'
    ];
}

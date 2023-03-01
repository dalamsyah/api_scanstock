<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StockCount extends Model
{
    /**
     * @var string
     */
    protected $table = 'stockcount';

    /**
     * @var array
     */
    protected $fillable = [
        'title', 'sn', 'sn2', 'scan', 'upload'
    ];
}
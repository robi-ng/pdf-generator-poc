<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Submissions extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'input1', 'input2', 'input3', 'input4', 'input5'
    ];
}

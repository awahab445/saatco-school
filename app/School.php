<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class School extends Model
{

    protected $primaryKey = 'school_id';
    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [

        'name', 'address','zip_code','city','state','country'

    ];

    //
}

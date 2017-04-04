<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 4/4/17
 * Time: 1:32 AM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;


class Line extends Model
{
    protected $table = 'lines';

    protected $fillable = [
        'name','id'
    ];


}
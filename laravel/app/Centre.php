<?php
/**
 * Created by PhpStorm.
 * User: mohdeee
 * Date: 11/29/2015
 * Time: 6:04 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Centre extends Model {

    public $table = 'centres';

    protected $guarded = ['id'];

}
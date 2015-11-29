<?php
/**
 * Created by PhpStorm.
 * User: mohdeee
 * Date: 11/28/2015
 * Time: 11:55 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class Error extends Model {

    public $table = 'errors';

    protected $guarded =['id'];

}
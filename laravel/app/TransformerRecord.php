<?php
/**
 * Created by PhpStorm.
 * User: mohdeee
 * Date: 11/26/2015
 * Time: 7:43 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model;


class TransformerRecord extends Model{

    public $table = 'conditions';

    protected $guarded = ['id'];
}
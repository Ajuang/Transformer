<?php
/**
 * Created by PhpStorm.
 * User: mohdeee
 * Date: 11/23/2015
 * Time: 5:50 PM
 */

namespace App;

use Illuminate\Database\Eloquent\Model as Eloquent;


class Transformer extends Eloquent
{
    /**
     * Fillable  fields for a transformer
     * @var array
     */
    protected $fillable = [
        'transformer','model_number','city_location','mounting_location','number_of_phases','rated_voltage','control_centre','rated_power','type_of_insulation','slug','lat','lng'
    ];

}
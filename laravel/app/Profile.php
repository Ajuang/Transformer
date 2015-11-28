<?php
/**
 * Created by PhpStorm.
 * User: mohdeee
 * Date: 11/22/2015
 * Time: 11:57 PM
 */

namespace App;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

  protected $table ='profile';
  protected $fillable = array('userid','profilePic','about');



//relationships

 public  function getUser()
 {

    return $this ->belongsTo('User','userid');

 }

}
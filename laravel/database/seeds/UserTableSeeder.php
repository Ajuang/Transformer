<?php
/**
 * Created by PhpStorm.
 * User: mohdeee
 * Date: 11/23/2015
 * Time: 12:11 AM
 */

class UserTableSeeder extends Seeder
{
 public function  run (){
     User::create(array( 'name' => 'Chris Sevilleja', 'username' => 'sevilayha', 'email' => 'chris@scotch.io', 'password' => Hash::make('awesome'), 'designation' => 'field engineer', 'control centre' => 'Juja control centre',));

 }

}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        // task23 課題5
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required',
    );
    
    public function profile_histories()
    {
        return $this->hasMany('App\Profile_History');
    }
}

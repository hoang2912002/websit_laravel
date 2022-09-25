<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use DateTime;

class Student extends Model
{
    use HasFactory;
    public $timestamps = false;
    //ghi đè lên để k cho 2 cột created_at và updated_at tồn tại là cho $timestamps = false
    public function age() : Attribute
    {
        
        return Attribute::make(
            get : function ($value,$attributes){
                $date = new DateTime($attributes['birthdate']);
                $now = new DateTime();
                $interval = $now->diff($date);
                return $interval->y;
            }
        );
    }
    protected function genderName() : Attribute
    {
        return Attribute::make(
            get: function($value,$attributes){
                return ($attributes['gender'] === 1) ? 'Male' : 'Female';
            }
        );
    }
    //Laravel 9 
    // protected function fullName(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value,$attributes) => $attributes['first_name'] . ' ' . $attributes['last_name'],
    //     );
    // }
    // protected function age(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn ($value, $attributes) => $attributes['birthdate'] ,
    //     );
    // }


}

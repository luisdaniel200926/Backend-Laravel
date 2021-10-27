<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function owner(){
        return $this->belongsTo(User::class);
    }

    public function setNameAttribute($value){
        $this->attributes['name'] =  strtoupper($value);
    }

    public function setTypeAttribute($value){
        $this->attributes['type'] =  strtoupper($value);
    }

}

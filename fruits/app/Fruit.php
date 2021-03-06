<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Fruit extends Model
{
    protected $fillable = ['name', 'quantity'];

    public function boxes(){
        return $this->hasMany(Box::class);
    }
}

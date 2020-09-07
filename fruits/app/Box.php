<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Box extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'fruit_id', 'capacity', 'volume'];

    public function fruit(){
        return $this->belongsTo(Fruit::class);
    }
}

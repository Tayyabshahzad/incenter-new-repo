<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class County extends Model
{
    use HasFactory;

    public function CountyState(){
        return $this->belongsTo(State::class,'state_id');
    }
}

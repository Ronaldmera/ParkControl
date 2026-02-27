<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    protected $fillable = [
        'user_id',
        'vehicle_id',
        'entry_time'
    ];
    public function vehicle(){
        return $this->belongsTo(Vehicle::class);
    }
       public function user(){
        return $this->belongsTo(User::class);
    }
}

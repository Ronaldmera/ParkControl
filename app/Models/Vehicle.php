<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [
        'plate',
        'vehicle_type_id'
    ];
      public function vehicleType(){
        return $this->belongsTo(VehicleType::class);
    }
    public function entries(){
        return $this->hasMany(Entry::class);
    }
}

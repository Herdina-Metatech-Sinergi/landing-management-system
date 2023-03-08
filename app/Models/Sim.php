<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sim extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'foto_device_mashup' => 'array',
        'foto_website_based' => 'array',
        'foto_mobile_app' => 'array',
    ];

    public function feature(){
        return $this->hasMany(SimFeature::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SimFeature extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function sim(){
        return $this->BelongsTo(Sim::class);
    }
}

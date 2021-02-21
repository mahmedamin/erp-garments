<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GatePassDetail extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function gate_pass()
    {
        return $this->belongsTo(GatePass::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}

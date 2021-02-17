<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Traits\CommonModelTrait;

class GatePassDetail extends Model
{
    use HasFactory;
    use CommonModelTrait;

    public function gate_pass()
    {
        return $this->belongsTo(GatePass::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}

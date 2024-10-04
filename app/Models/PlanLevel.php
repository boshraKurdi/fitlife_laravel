<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PlanLevel extends Model
{
    use HasFactory;
    protected $table = 'plan_levels';

    protected $fillable = [
        'plans_id',
        'levels_id'
    ];
}

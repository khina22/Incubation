<?php

namespace App\Models\incubation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachingModel extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $table="t_coaching_master";
    protected $guarded = [];
}

<?php

namespace App\Models\incubation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvisoryBoardModel extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $table="t_advisory_master";
    protected $guarded = [];
}

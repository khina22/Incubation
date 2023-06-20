<?php

namespace App\Models\incubation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StakeholderModel extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $table="t_stakeholder_master";
    protected $guarded = [];
}

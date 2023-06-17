<?php

namespace App\Models\incubation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IncubateeModel extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $table="t_incubatee_master";
    protected $guarded = [];
}

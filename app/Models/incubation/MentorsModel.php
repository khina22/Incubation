<?php

namespace App\Models\incubation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MentorsModel extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $table="t_mentors_master";
    protected $guarded = [];
}

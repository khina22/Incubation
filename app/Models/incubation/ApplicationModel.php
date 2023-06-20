<?php

namespace App\Models\incubation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplicationModel extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $table="t_application_master";
    protected $guarded = [];
}

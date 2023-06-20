<?php

namespace App\Models\incubation;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventModel extends Model
{
    use HasFactory;
    public $timestamp=false;
    protected $table="t_event_master";
    protected $guarded = [];
}

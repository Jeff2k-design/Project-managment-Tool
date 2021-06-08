<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sched extends Model
{
    use HasFactory;


    protected $fillable = [
        'GroupNumber', 'Panelfirst', 'Panelsecond', 'Panelthird', 'Time', 'Date', 'Venue'
    ];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sched extends Model
{
    use HasFactory;


    protected $fillable = [
        'GroupName', 'Panelfirst', 'Panelsecond','Panelthird', 'Date', 'Venue'
    ];
}
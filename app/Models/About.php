<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory, Notifiable;

    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

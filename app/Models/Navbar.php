<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Navbar extends Model
{
   use HasFactory, Notifiable;

    protected $fillable = [
        'language',
        'title_eng',
        'title_fr',
        'url',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

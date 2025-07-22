<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Footer extends Model
{
   use HasFactory, Notifiable;

    protected $fillable = [
        'language',
        'sention_title_eng',
        'sention_title_ar',
        'label_eng',
        'label_ar',
        'url',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

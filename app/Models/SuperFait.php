<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SuperFait extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'language',
        'title_eng',
        'title_fr',
        'btn_text_eng',
        'btn_text_fr',
        'description_eng',
        'description_fr',
        'image',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

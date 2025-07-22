<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Supertrade extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'language',
        'title_eng',
        'title_fr',
        'card_title_eng',
        'card_title_fr',
        'card_description_eng',
        'card_description_fr',
        'image',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

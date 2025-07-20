<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Banner extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'language',
        'title_eng',
        'sub_title_eng',
        'btn_text1_eng',
        'btn_text2_eng',
        'video_eng',
        'title_fr',
        'sub_title_fr',
        'btn_text1_fr',
        'btn_text2_fr',
        'video_fr',
    ];
}

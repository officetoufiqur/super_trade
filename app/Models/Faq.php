<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faq extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'language',
        'section',
        'heading_eng',
        'sub_heading_eng',
        'question_eng',
        'answer_eng',
        'heading_fr',
        'sub_heading_fr',
        'question_fr',
        'answer_fr',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}

<?php

namespace App\Models;

use App\Models\FormQuestion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class QuestionChoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'choice',
        'is_correct',
    ];

    public function question()
    {
        return $this->belongsTo(FormQuestion::class);
    }
}

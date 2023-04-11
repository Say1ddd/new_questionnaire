<?php

namespace App\Models;

use App\Models\Form;
use App\Models\User;
use App\Models\FormQuestion;
use App\Models\QuestionChoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'form_id',
        'question_id',
        'choice_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function question()
    {
        return $this->belongsTo(FormQuestion::class);
    }

    public function choice()
    {
        return $this->belongsTo(QuestionChoice::class);
    }
}

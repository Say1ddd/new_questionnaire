<?php

namespace App\Models;

use App\Models\Form;
use App\Models\UserResponse;
use App\Models\QuestionChoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormQuestion extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_id',
        'question',
        'description',
        'image',
        'type',
        'score',
    ];

    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function choices()
    {
        return $this->hasMany(QuestionChoice::class);
    }

    public function responses()
    {
        return $this->hasMany(UserResponse::class);
    }
}

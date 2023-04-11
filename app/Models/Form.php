<?php

namespace App\Models;

use App\Models\User;
use App\Models\FormQuestion;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'creator',
        'title',
        'description',
        'status',
        'visibility',
        'has_score',
        'expired_at',
    ];

    public function questions()
    {
        return $this->hasMany(FormQuestion::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'creator');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = ['answer', 'is_checked', 'score'];

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}

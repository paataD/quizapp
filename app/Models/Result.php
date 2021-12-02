<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'description',
        'point_start',
        'point_end',
        'details'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

}

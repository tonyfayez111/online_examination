<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Question extends Model
{


    use HasFactory;


    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }


    protected $casts = [
        "text",
        "mcq_answers" => 'array',
        "duration",
        "chapter",
    ];
    // public function professor()
    // {
    //     return $this->belongsToMany(Professor::class);
    // }
}
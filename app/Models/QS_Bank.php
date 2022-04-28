<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QS_Bank extends Model
{

    use HasFactory;

    public function subject()
    {
        return $this->belongsTo('App\Models\subject', 'subject_id');
    }


    protected $casts = [
        "QS_TEXT",
        "QS_Ans" => 'array',
        "Duration",
        "chapter",
    ];
}

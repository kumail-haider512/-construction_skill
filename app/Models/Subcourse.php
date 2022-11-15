<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subcourse extends Model
{
    use HasFactory;
    public function Course()
    {
        return $this->belongsTo('App\Models\Course');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'job_id',
        'comment'
    ];

    public function job()
    {
        return $this->belongsTo(Job::class);
    }
}

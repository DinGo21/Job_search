<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'title',
        'description',
        'company',
        'company_image',
        'status'
    ];

    public function feedback()
    {
        return $this->hasMany(Feedback::class);
    }
}

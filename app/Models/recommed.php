<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recommed extends Model
{
    /** @use HasFactory<\Database\Factories\RecommedFactory> */
    use HasFactory;
    protected $fillable = [
        'problem',
        'environment',
        'work',
        'subject',
        'motivate',
        'stress',
        'skill',
        'success',
        'personality',
        'creativity',
        'user_id',
    ];

    

   protected $with = ['user'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

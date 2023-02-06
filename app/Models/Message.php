<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'message'
    ];

    public function getTitleAttribute()
    {
        return ucfirst(Str::limit($this->message, 50));
    }
}

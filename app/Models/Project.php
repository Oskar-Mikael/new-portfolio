<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'img_path',
        'github_link'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

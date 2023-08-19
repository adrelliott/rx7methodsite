<?php

namespace App\Models\Content;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Tag extends Model
{
    use HasFactory;

    protected $connection = 'content';

    protected $fillable = [
        'name', 'slug'
    ];

    public function articles(): BelongsToMany
    {
        $this->belongsToMany(Article::class);
    }
}

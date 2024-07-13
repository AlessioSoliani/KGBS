<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', 'description', 'date', 'location', 'contact',
        'image_url','cost',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}

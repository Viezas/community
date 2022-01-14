<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes, HasFactory;

    protected $fillable = [
        'message',
        'user_id'
    ];

    protected $appends = ['format_created_at', 'liked'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFormatCreatedAtAttribute()
    {
        return Carbon::parse($this->created_at)->format('d/m/Y');
    }

    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }

    public function liked(): bool
    {
        foreach ($this->likes as $like) {
            if($like->post->id == $this->id) {
                return true;
            }
        }
        return false;
    }
}

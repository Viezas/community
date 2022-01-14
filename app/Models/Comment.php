<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'post_id',
        'comment'
    ];

    protected $append = [
        'format_created_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post()
    {
        return $this->hasOne(Post::class);
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
            if($like->comment->id == $this->id) {
                return true;
            }
        }
        return false;
    }
}

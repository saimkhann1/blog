<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use function Pest\Laravel\post;

class Comment extends Model
{
    protected $fillable = ['comment', 'post_id', 'user_id'];

    use HasFactory;

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }
    public function posts(): BelongsTo
    {
        return $this->belongsTo(post::class);
    }
}

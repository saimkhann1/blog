<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Laravel\Scout\Searchable;
use function Pest\Laravel\post;

class Post extends Model
{


    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected $fillable = ['title', 'slug', 'user_id'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(user::class);
    }
    public function comments(): hasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function tags(): belongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }
    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function country()
{
    return $this->hasOneThrough(
        Country::class, 
        User::class,    
        'id',           
        'id',           
        'user_id',      
        'country_id'    
    );
}
}

    protected $fillable = ['title', 'slug', 'user_id', 'content', 'country_id'];


    public function toSearchableArray()
    {
        return [
            'title' => $this->title,
            'content' => $this->content,
        ];
    }

    public static function boot()
{
    parent::boot();

    static::creating(function ($post) {
        if (empty($post->slug)) {
            $post->slug = Str::slug($post->title);
        }
    });
}

    // Relationship with User (Post belongs to User)
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relationship with Comments (Post has many Comments)
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    // Relationship with Tags (Post belongs to many Tags)
    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function country()
    {
        return $this->hasOneThrough(
            Country::class,  // The related model (Country)
            User::class,     // The intermediate model (User)
            'id',            // Foreign key on User model (User's ID)
            'id',            // Foreign key on Country model (Country's ID)
            'user_id',       // Local key on Post model (Post's user_id)
            'country_id'     // Local key on User model (User's country_id)
        );
    }


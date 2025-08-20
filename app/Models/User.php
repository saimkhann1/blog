<?php

<<<<<<< HEAD
namespace App\Models;
use Illuminate\Support\Str;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
    'name',
    'slug', 
    'email',
    'password',
    'comment',
    'title',
    'content',
    'role_id',
    'country_id',
];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    protected static function boot()
{
    parent::boot();

    static::creating(function ($user) {
        $user->slug = Str::slug($user->name);
    });

    static::updating(function ($user) {
        $user->slug = Str::slug($user->name);
    });
}
    public function getRouteKeyName()
    {
        return 'slug';
    }
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
    public function role(): BelongsTo
    {
        return $this->belongsTo(Role::class);
    }
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
=======
    namespace App\Models;
    use Illuminate\Support\Str;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;
    use Illuminate\Database\Eloquent\Relations\HasMany;
    use Illuminate\Foundation\Auth\User as Authenticatable;
    use Illuminate\Notifications\Notifiable;
    use Illuminate\Contracts\Auth\MustVerifyEmail;

    class User extends Authenticatable implements MustVerifyEmail
    {
        /** @use HasFactory<\Database\Factories\UserFactory> */
        use HasFactory, Notifiable;

        /**
         * The attributes that are mass assignable.
         *
         * @var list<string>
         */
        protected $fillable = [
        'name',
        'slug', 
        'email',
        'password',
        'comment',
        'title',
        'content',
        'status',
        'role_id',
        'country_id',
    ];

        /**
         * The attributes that should be hidden for serialization.
         *
         * @var list<string>
         */
        protected $hidden = [
            'password',
            'remember_token',
        ];

        /**
         * Get the attributes that should be cast.
         *
         * @return array<string, string>
         */
        protected function casts(): array
        {
            return [
                'email_verified_at' => 'datetime',
                'password' => 'hashed',
            ];
        }
        protected static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->slug = Str::slug($user->name);
        });

        static::updating(function ($user) {
            $user->slug = Str::slug($user->name);
        });
    }
        public function getRouteKeyName()
        {
            return 'slug';
        }
        public function getStatusTextAttribute()
        {
            return $this->status==1 ? 'Active' : 'InActive';
        }
        public function country(): BelongsTo
        {
            return $this->belongsTo(Country::class);
        }
        public function role(): BelongsTo
        {
            return $this->belongsTo(Role::class);
        }
        public function posts(): HasMany
        {
            return $this->hasMany(Post::class);
        }
        public function comments(): HasMany
        {
            return $this->hasMany(Comment::class);
        }
    }
>>>>>>> c17c6a8 (create new post tk)

<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Auth\Passwords\CanResetPassword;

class User extends Authenticatable implements CanResetPasswordContract
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'is_active',
        'role',
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
            'is_active' => 'boolean',
        ];
    }

    public function canAccessFilament(): bool
        {
            return true;
        }
    
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    // 🔹 Vérifier si c’est un super admin
    // public function isSuperAdmin(): bool
    // {
    //     return $this->role === 'super-admin';
    // }

    // 🔹 Vérifier si c’est un éditeur
    public function isEditor(): bool
    {
        return $this->role === 'admin-editor';
    }
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new \App\Notifications\ResetPasswordNotification($token));
    }

    
}

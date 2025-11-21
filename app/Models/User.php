<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'second_name',
        'first_lastname',
        'second_lastname',
        'email',
        'cedula',
        'password',
        'is_admin',
        'is_professor'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
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
     public function isAdmin()
    {
        return $this->is_admin;
    }

    public function isStaff()
    {
        return $this->is_staff;
    }

    public function authorizeRoles($roles)
    {
        abort_unless($this->hasAnyRole($roles), 404);
        return true;
    }
     public function hasAnyRole($roles)
    {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->$role) {
                    return true;
                }
            }
        } else {
            if ($this->$roles) {
                return true;
            }
        }
        return false;
    }
}

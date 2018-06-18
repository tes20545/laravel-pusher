<?php

namespace App;

use App\Notifications\HasSubnotifications;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * Adding helpers to followers:
     *
     * $user->subnotifications - all subnotifications
     * $user->unreadSubnotifications - all unread subnotifications
     * $user->readSubnotifications - all read subnotifications
     */
    use HasSubnotifications;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}

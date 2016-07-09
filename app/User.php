<?php

namespace Example;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Example\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\Example\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\Example\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\Example\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\Example\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\Example\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\Example\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\Example\User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
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

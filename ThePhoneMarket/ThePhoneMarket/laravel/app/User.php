<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'firstname', 'lastname', 'email', 'password', 'phonenumber', 'zip','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * One-to-Many relationship
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function auctions()
    {
        return $this->hasMany(Auction::class);
    }

    /**
     * Many-to-Many relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Returns users full name
     * @return string
     */
    public function fullName()
    {
        return $this->firstname . ' ' . $this->lastname;
    }
    
  
    
    /**
     * Checks user role
     * @param $roleName
     * @return bool
     */
    public function hasRole($roleName)
    {
        foreach($this->roles()->get() as $role)
        {
            if($role->title == $roleName)
            {
                return true;
            }
        }

        return false;
    }

    /**
     * Checks if user is administrator
     * @return bool
     */
    public function isAdmin()
    {
        foreach($this->roles()->get() as $role)
        {
            if($role->title == "Hoofdbeheerder" || $role->title == "Beheerder")
            {
                return true;
            }
        }
        return false;
    }

    


}


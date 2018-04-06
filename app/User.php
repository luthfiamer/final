<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\MailResetPasswordToken;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'birthday', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function userdetails()
    {
        return $this->hasOne (UserDetails::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    /**
     
     * @param string|array $roles
     
     */

    public function authorizeRoles($roles)
    {
    //     if (is_array($roles)) {

    //    return $this->hasAnyRole($roles) || 
    //        abort(401, 'This action is unauthorized.');
       
    //    }

    //    return $this->hasRole($roles) || 
    //        abort(401, 'This action is unauthorized.');
       // below is the new code
       if ($this->hasAnyRole($roles)) {
           return true;
       }
       abort (401,'this action is unauthorized.');

    }
    /**
     * check multiple roles

     * @param array $roles

     */

     public function hasAnyRole($roles)
     {
         
    //    return null !== $this->roles()->whereIn('name', $roles)->first();
       // below is the new code
       if (is_array($roles)) {
           foreach ($roles as $role) {
               if ($this->hasRole($role)){
                   return true;
               }
           }
       } else {
           if ($this->hasRole($roles)){
               return true;
           }
       }
               return false;
     }

     /**
      
      * Check one role
      
      * @param string role
        
      */

      public function hasRole($role)
      {
        //   return null !==$this->roles()->where('name', $role)->first();
       // below is the new code 
       if ($this->roles()->where('name', $role)->first()){
           return true;
       }
       return false;
      }
      
      /**
       * send a password reset email to the user
       */
      public function sendPasswordResetNotification($token)
      {
          $this->notify(new MailResetPasswordToken($token));
      }
}

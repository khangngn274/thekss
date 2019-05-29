<?php 

namespace App\Models;
 use Illuminate\Notifications\Notifiable;

use Illuminate\Foundation\Auth\User as Authenticatable;
 
class Account extends Authenticatable{
    
    use Notifiable;

    protected $guard = 'admin';

    protected $table = 'tbl_account';
    
    protected $fillable = [
        'account_username',
        'account_email',
        'password',
        'account_status'
    ];
 
    protected $hidden = ['password', 'remember_token'];
 
}
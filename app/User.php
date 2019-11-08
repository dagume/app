<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
//use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasRoles;

    protected  $table= 'contacts';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'parent_contact_id',
        'type',
        'name',
        'lastname',
        'identification_type',
        'identification_number',
        'email',
        'phones',
        'state',
        'locate',
        'city',
        'address',
        'web_site',
        'password',
        'id_folder',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    //Falta Relacion con cuentas
    public function contact()
    {
        return $this->BelongsTo(User::class);
    }
    public function members()
    {
        return $this->hasMany('App\Member');
    }
    public function orders()
    {
        return $this->hasMany('App\Order');
    }
    public function quotations()
    {
        return $this->hasMany('App\Quotation', 'id_contact', 'id_contact');
    }
}

<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{
    use HasApiTokens, Notifiable, HasRoles;

    protected  $table= 'contacts';

    protected $primaryKey = 'id_contact';

    public $timestamps = true;

    protected $fillable = [
        'id_parent_contact',
        'id_role',
        'type',
        'name',
        'lastname',
        'identification_type',
        'identification_number',
        'email',
        'phones',
        'state',
        'city',
        'locate',
        'address',
        'web_site',
        'password',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    //Relacion con ordenes
    //Relacion con cotizacion
    //Relacion con cuentas
    //Relacion con Roles
    public function members(){
        return $this-HasMany(Member::class);
    }
    public function contact(){
        return $this-BelongsTo(User::class);
    }
}

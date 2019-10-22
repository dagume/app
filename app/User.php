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
        'id_folder',
    ];
    protected $hidden = [
        'password', 'remember_token',
    ];
    //Falta Relacion con cuentas
    public function role()
    {
        return $this->belongsTo('Caffeinated\Shinobi\Models\Role', 'id_role');
    }
    public function members()
    {
        return $this->hasMany('App\Member', 'id_contact', 'id_contact');
    }
    public function contact()
    {
        return $this->BelongsTo(User::class);
    }
    public function orders()
    {
        return $this->hasMany('App\Order', 'id_contact', 'id_contact');
    }
    public function quotations()
    {
        return $this->hasMany('App\Quotation', 'id_contact', 'id_contact');
    }
}

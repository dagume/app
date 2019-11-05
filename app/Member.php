<?php

namespace App;

//use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Eloquent\Model;
//use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;
use Spatie\Permission\Traits\HasRoles;


class Member extends Model
{
    use HasRoles;
    //use HasRolesAndPermissions;
    protected $guard_name = 'api';
    
    protected  $table= 'members';

    protected $primaryKey = 'id_members';

    public $timestamps = false;

    protected $fillable = [
        'id_project',
        'id_contact',
        'hours_week',
        'hours_month',
        'state'
    ];


    public function project()
    {
        return $this->belongsTo('App\Project', 'id_project', 'id_project');
    }
    public function contact()
    {
        return $this->belongsTo('App\User', 'id_contact', 'id_contact');
    }
    //public function roles()
    //{
    //    return $this->belongsToMany(Role::class, 'role_user', 'id_members', 'id_role')->withTimestamps();
    //}

}

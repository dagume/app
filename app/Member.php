<?php

namespace App;

use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
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
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user', 'id_members', 'id_role')->withTimestamps();
    }

}

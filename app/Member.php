<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Models\Role;

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
        return $this->belongsTo('App\Contact', 'id_contact', 'id_contact');
    }
    public function roles()
    {
        return $this->belongsToMany('Caffeinated\Shinobi\Models\Role', 'role_user')->withPivot('id_members', 'id_role')->withTimestamps();
    }
    public function orders()
    {
        return $this->hasMany('App\Order', 'id_members');
    }

}

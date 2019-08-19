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
        'id_rol',
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
    public function role()
    {
        return $this->belongsTo('Spatie\Permission\Models\Role', 'id_role', 'id');
    }
    public function orders()
    {
        return $this->hasMany('App\Order', 'id_members');
    }

}

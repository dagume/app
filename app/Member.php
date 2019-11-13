<?php

namespace App;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Caffeinated\Shinobi\Concerns\HasRolesAndPermissions;

class Member extends Model
{
    use HasRolesAndPermissions;
    
    protected  $table= 'members';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'project_id',
        'contact_id',
        'role_id',
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
    public function role()
    {
        return $this->belongsTo(Role::class)->withTimestamps();
    }

}

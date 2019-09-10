<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected  $table= 'projects';

    protected $primaryKey = 'id_project';

    public $timestamps = false;

    protected $fillable = [
        'id_proyect_type',
        'id_parent',
        'name',
        'start_date',
        'end_date',
        'description',
        'contract_value',
        'expenses',
        'process',
        'state',
        'place',
        'address',
        'type',
        'association',
        'consortium_name',
    ];
    public function Project_type()
    {
        return $this->belongsTo('App\Project_type', 'id_proyect_type', 'id_proyect_type');
    }
    public function members()
    {
        return $this->hasMany('App\Member', 'id_project');
    }
    public function parent_project()
    {
        return $this->belongsTo('App\Project', 'id_parent', 'id_project');
    }
}

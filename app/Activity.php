<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected  $table= 'activities';

    protected $primaryKey = 'id_activity';

    public $timestamps = false;

    protected $fillable = [
        'id_project',
        'id_parent_activity',
        'name',
        'description',
        'date_start',
        'date_end',
        'state',
        'completed',
        'priority',
        'notes'
    ];

    public function project()
    {
        return $this->belongsTo('App\Project', 'id_project', 'id_project');
    }
    public function activities()
    {
        return $this->hasMany('App\Activity', 'id_parent_activity', 'id_activity');
    }


}

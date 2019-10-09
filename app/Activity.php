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
        'name',
        'description',
        'date_start',
        'date_end',
        'state',
        'process',
        'type',
        'duration',
        'priority'
    ];

    public function project()
    {
        return $this->belongsTo('App\Project', 'id_project', 'id_project');
    }



}

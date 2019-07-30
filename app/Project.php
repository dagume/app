<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    protected  $table= 'project';

    protected $primaryKey = 'project_id';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'start_date',
        'closing_date',
        'description',
        'budget',
        'execution',
        'advance',
        'category',
        'state'

    ];


}

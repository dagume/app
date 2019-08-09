<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Project extends Model
{
    protected  $table= 'projects';

    protected $primaryKey = 'id_project';

    public $timestamps = false;

    protected $fillable = [
        'id_parent',
        'name',
        'start_date',
        'end_date',
        'description',
        'contract_value',
        'expenses',
        'process',
        'state'
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
    public function project(){
        return $this-BelongsTo(Project::class, 'id_parent');
    }
}

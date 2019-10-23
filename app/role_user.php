<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class role_user extends Model
{
    protected  $table= 'role_user';

    protected $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'id_role',
        'id_members'
    ];
}

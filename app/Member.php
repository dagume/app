<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nuwave\Lighthouse\Schema\Directives\BelongsToDirective;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Member extends Model
{

    protected  $table= 'members';

    protected $primaryKey = 'id_member';

    public $timestamps = false;

    protected $fillable = [
        'id_project',
        'id_contact',
        'id_rol',
        'hours_week',
        'hours_month'
    ];

    public function project(){
        return $this-BelongsTo(Project::class, 'id_project');
    }
    public function contact(){
        return $this-BelongsTo(Contact::class,'id_contact');
    }

}

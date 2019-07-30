<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nuwave\Lighthouse\Schema\Directives\BelongsToDirective;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Member extends Model
{

    protected  $table= 'Members';

    protected $primaryKey = 'member_id';

    public $timestamps = false;

    protected $fillable = [
        'project_id',
        'contact_id'
    ];

    public function project(){
        return $this-BelongsTo(Project::class);
    }
    public function contact(){
        return $this-BelongsTo(Contact::class);
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Contact extends Model
{
    protected  $table= 'contacts';

    protected $primaryKey = 'id_contact';

    public $timestamps = false;

    protected $fillable = [
        'id_parent_contact',
        'id_job',
        'type',
        'name',
        'lastname',
        'identification_type',
        'identification_number',
        'email',
        'phones',
        'state',
        'locate',
        'city',
        'address',
        'web_site'
    ];

    public function members(){
        return $this-HasMany(Member::class);
    }
    public function contact(){
        return $this-BelongsTo(Contact::class);
    }
}

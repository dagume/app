<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected  $table= 'contact';

    protected $primaryKey = 'contact_id';

    public $timestamps = false;

    protected $fillable = [
        'parent_id',
        'type',
        'name',
        'surname',
        'document_type',
        'document_number',
        'email',
        'phones',
        'state',
        'place',
        'address',
        'website',
        'job'
    ];

    public function contact(){
        return $this-BelongsTo(Contact::class);
    }
}

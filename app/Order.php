<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected  $table= 'orders';

    protected $primaryKey = 'id_order';

    public $timestamps = false;

    protected $fillable = [
        'id_members',
        'name',
        'code',
        'description',
        'date_order',
        'notes'
    ];

    public function member()
    {
        return $this->belongsTo('App\Member', 'id_members', 'id_members');
    }
    public function details()
    {
        return $this->hasMany('App\Detail', 'id_order');
    }

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected  $table= 'orders';

    protected $primaryKey = 'id_order';

    public $timestamps = false;

    protected $fillable = [
        'id_contact',
        'name',
        'code',
        'application_date',
        'state',
        'description',
        '__delivery_site',
        'sender_data__',
        'subtotal',
        'total'
    ];

    public function contact()
    {
        return $this->belongsTo('App\User', 'id_contact', 'id_contact');
    }
    public function details()
    {
        return $this->hasMany('App\Detail', 'id_order', 'id_order');
    }
    public function quotations()
    {
        return $this->hasMany('App\Quotation', 'id_order', 'id_order');
    }

}

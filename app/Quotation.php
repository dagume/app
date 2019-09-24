<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotation extends Model
{
    protected  $table= 'quotations';

    protected $primaryKey = 'id_quotation';

    public $timestamps = false;

    protected $fillable = [
        'id_order',
        'id_contact',
        'link',
        'authorization',
        'date'
    ];

    public function order()
    {
        return $this->belongsTo('App\Order', 'id_order', 'id_order');
    }
    public function contact()
    {
        return $this->belongsTo('App\User', 'id_contact', 'id_contact');
    }

}

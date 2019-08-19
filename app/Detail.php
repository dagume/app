<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected  $table= 'details';

    protected $primaryKey = 'id_detail';

    public $timestamps = false;

    protected $fillable = [
        'id_product',
        'id_order',
        'quantity',
        'value',
        'cost',
        'measure'
    ];

    public function product()
    {
        return $this->belongsTo('App\Product', 'id_product', 'id_product');
    }
    public function order()
    {
        return $this->belongsTo('App\Order', 'id_order', 'id_order');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected  $table= 'products';

    protected $primaryKey = 'id_product';

    public $timestamps = false;

    protected $fillable = [
        'id_category',
        'name',
        'description',
        'precio',
        'amount'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category', 'id_category', 'id_category');
    }

}

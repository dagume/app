<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected  $table= 'category';

    protected $primaryKey = 'id_category';

    public $timestamps = false;

    protected $fillable = [
        'name',
        'description'
    ];

    public function products(){
        return $this->hasMany('App\Product','id_category');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{

    protected $guarded = [];
    protected $table = 'master_product_unit';
    protected $primaryKey = 'id';
    
    public function product(){
        return $this->belongsToMany(Product::class, 'PdtSKUCode','id');
    }

}

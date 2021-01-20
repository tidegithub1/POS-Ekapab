<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //demi keamanan kalian harusnya ubah ini ke fillable ya
    protected $guarded = [];
    protected $table = 'master_product_sku';
    protected $primaryKey = 'id';

    public function barcodes(){
        return $this->belongsToMany(Barcode::class,'barcode_id','id');
    }

    public function units(){
        return $this->belongsToMany(Unit::class,'unit_id','id');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}

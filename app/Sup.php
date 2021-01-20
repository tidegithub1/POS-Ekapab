<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sup extends Model
{

    protected $guarded = [];
    protected $table = 'master_supplier';

    public function user(){
        return $this->belongsTo(User::class);
}
}

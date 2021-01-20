<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MasterProductSize extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_product_size', function (Blueprint $table) {
            $table->string('SizeCode',5);
            $table->string('SizeName',100);
            $table->string('PdtAge',100);
            $table->string('UnitType',100);

            $table->string('WhoINS',100);
            $table->date('DateINS');
            $table->time('TimeINS');
            $table->string('WhoUPdate',100);
            $table->date('DateUPdate');
            $table->time('TimeUPdate');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_product_size');
    }
}

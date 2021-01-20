<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MasterProductUnit extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_product_unit', function (Blueprint $table) {
            $table->increments('id');
            $table->string('UnitCode',3);
            $table->string('UnitName',20);
            $table->integer('UnitFactor');
            $table->string('PdtAge',100);
            $table->string('UnitType',100);
            
            //$table->string('WhoINS',100);
            //$table->date('DateINS');
            //$table->time('TimeINS');
            //$table->string('WhoUPdate',100);
            //$table->date('DateUPdate');
            //$table->time('TimeUPdate');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_product_unit');
    }
}

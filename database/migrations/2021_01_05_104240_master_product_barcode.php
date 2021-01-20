<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MasterProductBarcode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_product_barcode', function (Blueprint $table) {
            $table->increments('id');
            $table->string('PdtSKUCode',20);
            $table->string('PdtBarcode',20);
            $table->string('PdtSKURef',20);
            $table->string('PdtUnitCode',3);
            $table->float('Price1');
            $table->float('Price2');
            $table->float('Price3');
            $table->float('Price4');
            $table->float('Price5');
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
        Schema::dropIfExists('master_product_barcode');
    }
}

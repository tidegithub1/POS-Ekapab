<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MasterProductSku extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_product_sku', function (Blueprint $table) {
            $table->increments('id');
            $table->string('PdtSKUCode',20);
            $table->string('PdtName',200);
            $table->string('PdtNameOTH',200);
            $table->integer('PdtStkQty');
            $table->float('PdtStkAmt');
            $table->integer('PdtVatType');
            $table->integer('PdtType');
            $table->string('PdtGrpCode',50);
            $table->string('PdtBndCode',5);
            $table->string('PdtSizeCode',5);
            $table->string('PdtColorCode',5);
            $table->string('SplCode',10);
            $table->string('GLAccNO',10);
            $table->string('PdtAge',100);
            $table->string('UnitType',100);

            //$table->unsignedBigInteger('PdtBarcode');
            //$table->unsignedBigInteger('UnitCode');

            $table->integer('barcode_id')->unsigned();
            $table->integer('unit_id')->unsigned();

            //$table->foreign('barcode_id')->references('id')->on('master_product_barcode')->onDelete('cascade');
            //$table->foreign('unit_id')->references('id')->on('master_product_unit')->onDelete('cascade');


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
        Schema::dropIfExists('master_product_sku');
    }
}

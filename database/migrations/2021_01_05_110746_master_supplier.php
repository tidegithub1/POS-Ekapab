<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MasterSupplier extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_supplier', function (Blueprint $table) {
            $table->id();
            $table->string('SplCode',10);
            $table->string('SplName',100);
            $table->string('SplNameOTH',100);
            $table->string('SplAddress1',100);
            $table->string('SplAddress2',100);
            $table->string('SplTaxNo',13);
            $table->string('SplTel',100);
            $table->string('SplEmail',100);
            $table->string('SplOthinfo',100);
            $table->integer('SplCraditterm');
            $table->integer('SplVatType');
            $table->float('SplLimit');
            $table->float('SplAmt');
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
        Schema::dropIfExists('master_supplier');
    }
}

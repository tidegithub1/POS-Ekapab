<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MasterProductGroup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_product_group', function (Blueprint $table) {
            $table->string('GrpCode',3);
            $table->string('GrpName',50);
            $table->integer('GrpLevel');
            $table->string('PdtGrpCode',200);
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
        Schema::dropIfExists('master_product_group');
    }
}

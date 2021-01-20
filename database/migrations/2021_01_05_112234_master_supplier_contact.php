<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MasterSupplierContact extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_supplier_contact', function (Blueprint $table) {
            $table->string('SplCode',10);
            $table->string('ContectName',100);
            $table->string('ContectTel',100);
            $table->string('ContectEmail',100);
            $table->string('ContectOth1',100);
            $table->string('ContectOth2',100);
            
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
        Schema::dropIfExists('master_supplier_contact');
    }
}

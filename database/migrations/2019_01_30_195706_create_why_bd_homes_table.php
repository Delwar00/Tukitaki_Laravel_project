<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWhyBdHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('why_bd_homes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('service_header_name');
            $table->string('service_details');
            $table->integer('service_status')->default(1)->comment('1=active,2=deactive');
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
        Schema::dropIfExists('why_bd_homes');
    }
}

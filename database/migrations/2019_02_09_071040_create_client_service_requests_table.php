<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientServiceRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_service_requests', function (Blueprint $table) {
            $table->increments('id');
            // $table->integer('sub_area_id');
            $table->string('selected_service_area');
            $table->string('selected_sub_service');
            $table->string('selected_service_street');
            $table->string('contact_num');
            $table->integer('selected_service_status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_service_requests');
    }
}

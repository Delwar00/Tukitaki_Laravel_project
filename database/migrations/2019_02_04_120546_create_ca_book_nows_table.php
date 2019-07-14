<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCaBookNowsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ca_book_nows', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cabook_heading');
            $table->string('cabook_details');
            $table->string('cabook_button');
            $table->string('cabook_button_url');
            $table->string('cabook_get');
            $table->integer('cabook_status')->default(1);
            $table->string('cabook_image')->nullable();
            $table->string('cabook_call');
            $table->string('cabook_book');
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
        Schema::dropIfExists('ca_book_nows');
    }
}

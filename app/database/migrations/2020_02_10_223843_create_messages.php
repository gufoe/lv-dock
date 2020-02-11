<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('type', 20)->index();
            $table->date('reg_date')->nullable();
            $table->date('doc_date')->nullable();
            $table->string('int_pr');
            $table->string('ext_pr');
            $table->string('sender_code'); // ?
            $table->string('sender_name'); // ?
            $table->text('notes');
            $table->string('office'); // ?
            $table->string('mean_of_arrival'); // ?
            $table->string('location'); // ?
            $table->string('file_token')->nullable();
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
        Schema::dropIfExists('messages');
    }
}

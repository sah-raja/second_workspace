<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->timestamp('posted_date')->nullable();
            $table->timestamp('deadline')->nullable();
            $table->text('short_description')->nullable();
            $table->text('long_description')->nullable();
            $table->text('key_responsibilities')->nullable();
            $table->text('requirements')->nullable();
            $table->integer('fk_company')->nullable();
            $table->integer('fk_category')->nullable();
            $table->integer('fk_skill')->nullable();
            $table->integer('no_of_opeanings')->nullable();
            $table->string('position_type')->nullable();
            $table->string('experience')->nullable();
            $table->string('education')->nullable();
            $table->integer('fk_city')->nullable();
            $table->string('location')->nullable();
            $table->integer('status')->nullable();
            $table->integer('sort')->nullable();            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_details');
    }
}

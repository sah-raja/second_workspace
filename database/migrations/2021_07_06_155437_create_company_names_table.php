<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyNamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('company_names', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('fk_city')->nullable();
            $table->string('location')->nullable();
            $table->string('branch')->nullable();
            $table->string('contact_details')->nullable();
            $table->string('logo')->nullable();
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
        Schema::dropIfExists('company_names');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortofoliosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portofolios', function (Blueprint $table) {
            $table->id();
            $table->string('titre')->nullable();
            $table->string('slogant')->nullable();
            $table->text('description')->nullable();
            $table->string('formateur')->nullable();
            $table->string('profession_formateur')->nullable();
            $table->string('photo_formateur')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twiter')->nullable();
            $table->string('in')->nullable();
            $table->string('instagram')->nullable();
            $table->string('cover')->nullable();
            $table->string('video')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('portofolios');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->string('grandtitre')->nullable();
            $table->date('date_bedut')->nullable();
            $table->date('date_fin')->nullable();
            $table->string('quota')->nullable();
            $table->string('lienPaiement')->nullable();
            $table->string('visuelpaiement')->nullable();
            $table->text('description')->nullable();
            $table->string('banniere')->nullable();
            $table->enum('categorie', array('payant','free'))->default('free');
            $table->enum('etat', array('active','suspend', 'cloturer'))->default('active');
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
        Schema::dropIfExists('registers');
    }
}

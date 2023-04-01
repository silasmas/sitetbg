<?php

use App\Models\register;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientregistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientregisters', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('email');
            $table->string('phone');
            $table->string('pays');
            $table->string('sexe');
            $table->string('profession')->nullable();
            $table->string('secteur')->nullable();
            $table->foreignIdFor(register::class);
            // $table->foreignId('register_id')->constrained('register');
           // $table->foreignId('register_id')->constrained('register');
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
        Schema::dropIfExists('clientregisters');
    }
}

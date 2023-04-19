<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /*
        Schema::create('annonces', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_objet');
            $table->integer('id_user');
            $table->string('titre');
            $table->string('ville');
            $table->float('prix');
            $table->string('status');
            $table->timestamps();
        });
        */
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('titre');
            $table->decimal('prix');
            $table->string('ville');
            $table->enum('status', ['active', 'inactive']);
            $table->string('categorie');
            $table->text('description');
            $table->string('image')->nullable();
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
        Schema::dropIfExists('annonces');
    }
}

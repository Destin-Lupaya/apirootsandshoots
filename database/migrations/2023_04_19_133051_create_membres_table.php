<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membres', function (Blueprint $table) {
            $table->id();
            $table->string('CodeMembre');
            $table->string('Nom');
            $table->string('PostNom');
            $table->string('Prenom');
            $table->string('Age');
            $table->string('Sexe');
            $table->string('ClassEtude');
            $table->string('NiveauEtude');
            $table->string('Numero');
            $table->string('FonctionMembre');
            $table->string('AdresseMembre');
            $table->string('mail');
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
        Schema::dropIfExists('membres');
    }
};

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
        Schema::create('clubs', function (Blueprint $table) {
            $table->id();
            $table->string('CodeClub');
            $table->string('NomClub');
            $table->string('AnneeAdhesion');
            $table->string('CodeAffiliation');
            $table->string('TypeAdhesion');
            $table->string('NombreMembres');
            $table->string('GroupeAge');
            $table->string('AdresseClub');
            $table->string('Territoire_Ville');
            $table->string('Province');
            $table->string('NomPresidentClub');
            $table->string('NomCoordinateur');
            $table->string('ProfessionCoordinateur');
            $table->string('AdresseCoordinateur');
            $table->string('Telephone');
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
        Schema::dropIfExists('clubs');
    }
};

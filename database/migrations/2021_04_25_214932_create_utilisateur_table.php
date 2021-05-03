<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateurTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->id();
            $table->string('identite',50);            
            $table->string('anniversaire',50);            
            $table->string('image',50);            
            $table->string('poste',50);            
            $table->string('age',50);            
            $table->string('site',100);            
            $table->string('degree',50);            
            $table->string('phone',25);            
            $table->string('mail',50);            
            $table->string('ville',50);            
            $table->string('statut',50);            
            $table->text('description');            
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
        Schema::dropIfExists('utilisateur');
    }
}

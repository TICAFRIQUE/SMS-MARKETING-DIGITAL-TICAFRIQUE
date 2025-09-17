<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('demandes', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('societe');             // Personne Physique ou Société
            $table->string('adresse')->nullable();
            $table->string('raisonsocial')->nullable();
            $table->string('rccm')->nullable();
            $table->string('ville')->nullable();
            $table->string('activite')->nullable();

            $table->string('username');
            $table->string('expediteur');
            $table->integer('nbcompte');
            $table->decimal('montant', 12, 2);

            $table->string('nom');
            $table->string('fonction');
            $table->string('tel');
            $table->string('fax')->nullable();
            $table->string('email');

            $table->text('complementaire')->nullable();

            $table->boolean('validation')->default(false);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('gilets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained()
                ->onDelete('cascade');
            $table->string('profile_name', 100)->default('Profil Principal');
            $table->decimal('tour_poitrine', 5, 2)->nullable();
            $table->decimal('tour_taille', 5, 2)->nullable();
            $table->decimal('longueur_gilet', 5, 2)->nullable();
            $table->decimal('encolure', 5, 2)->nullable();
            $table->enum('encolure_style', ['v', 'u', 'carree'])->default('v');
            $table->enum('boutons', ['5', '6', '7'])->default('6');
            $table->enum('poches', ['passepoil', 'classique', 'double'])
                ->default('passepoil');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('gilets');
    }
};

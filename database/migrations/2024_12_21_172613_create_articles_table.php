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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('site_id')->constrained()->onDelete('cascade'); // Lien avec les sites
            $table->string('name');        // Nom de l'article
            $table->integer('area');       // Superficie en m²
            $table->text('details')->nullable(); // Données diverses
            $table->integer('normal_price'); // Prix normal
            $table->integer('promo_price'); // Prix promotionnel
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
        Schema::table('articles', function (Blueprint $table) {
            //
        });
    }
};

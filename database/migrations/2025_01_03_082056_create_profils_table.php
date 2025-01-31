<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('profils', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->nullable();
            $table->string('company_address')->nullable();
            $table->string('company_logo')->nullable();
            // location coords
            $table->string('latitude')->nullable();
            $table->string('longitude')->nullable();

            $table->integer('coins')->default(0);

            $table->foreignId('user_id')
                ->nullable()
                ->constrained('users');

            $table->string('url')->nullable();
            $table->string('website')->nullable();
            $table->integer('rate')->default(0)->max(5);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};

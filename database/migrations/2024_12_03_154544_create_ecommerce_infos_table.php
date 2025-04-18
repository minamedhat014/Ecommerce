<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ecommerce_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name');     
            $table->string('discriptions');
            $table->longText('key_words');
            $table->string('phone')->nullable();  
            $table->string('email')->nullable(); 
            $table->string('slogan')->nullable(); 
            $table->string('vedio_link')->nullable(); 
            $table->string('address')->nullable;
            $table->string('status')->default('not_ready');
            $table->string('created_by');
            $table->string('updated_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecommerce_infos');
    }
};

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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained();
            $table->foreignId('user_id')->constrained();    
            $table->text('title');
            $table->text('short_content');
            $table->text('content');
            $table->date('deadline')->default(now());
            $table->text('discount')->default('0');
            $table->string('photo')->default('test.jpg');
            $table->timestamps();
        });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

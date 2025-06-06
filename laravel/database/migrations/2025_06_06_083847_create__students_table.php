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
        Schema::create('_students', function (Blueprint $table) {
          $table->id(); // Automatically creates 'id' as primary key
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->timestamps(); // Creates 'created_at' and 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_students');
    }
};

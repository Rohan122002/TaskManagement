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
        //
        Schema::create('customer', function (Blueprint $table){
            $table->id('user_id');
            $table->string('Name');
            $table->string('email');
            $table->enum('role', ['Admin', 'Manager', 'Developer', 'Tester']);
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('customer');
    }
};

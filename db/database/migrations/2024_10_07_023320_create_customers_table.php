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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('nick_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('avatar')->nullable();
            $table->string('password');
            $table->string('phone')-> unique();
            $table->string('email')->unique();
            $table->string('address');
            $table->string('note')->nullable();
            $table->timestamp('login_at')->nullable();
            $table->timestamp('change_password_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};

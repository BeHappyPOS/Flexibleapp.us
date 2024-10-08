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
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('staff_name');
            $table->string('nick_name')->unique();
            $table->string('avatar')->nullable();
            $table->string('password');
            $table->string('phone')-> unique();
            $table->string('email')->unique();
            $table->string('SNN')->nullable();
            $table->string('address')->nullable();
            $table->string('note')->nullable();
            $table->string('staff_skills')->unique();
            $table->string('staff_status')->unique();
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
        Schema::dropIfExists('staff');
    }
};

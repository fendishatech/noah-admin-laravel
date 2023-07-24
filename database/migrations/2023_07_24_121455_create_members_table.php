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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->string('first_name')->nullable(false);
            $table->string('father_name')->nullable(false);
            $table->string('last_name')->nullable(false);
            $table->string('title')->nullable();
            $table->enum('gender', ['male', 'female'])->nullable(false);
            $table->date('dob')->nullable(false);
            $table->enum('martial_status', ['married', 'single', 'divorced', 'widow'])->nullable(false);
            $table->integer('family_no')->nullable(false);
            $table->integer('family_males')->nullable(false);
            $table->integer('family_females')->nullable(false);
            $table->string('phone_no')->nullable(false);
            $table->string('email')->nullable();
            $table->string('will_list')->nullable(false);
            $table->string('password')->nullable(false);
            $table->string('refreshToken')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};

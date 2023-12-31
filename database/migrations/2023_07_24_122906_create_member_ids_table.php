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
        Schema::create('member_ids', function (Blueprint $table) {
            $table->id();
            $table->enum("id_type", ["public", "license", "passport"]);
            $table->string("id_number");
            $table->string("id_img_path");

            $table->foreignId('member_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('member_ids');
    }
};

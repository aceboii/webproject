<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Tube;

return new class extends Migration
{
    /**
     * Run the migrations
     */
    public function up(): void
    {
        Schema::create('tubes', function (Blueprint $table) {
            $table->id();
            $table->string('email');
            $table->string('password');
            $table->string('confirmPassword');
            $table->string('address');
            $table->string('bio');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.  
     */
    public function down(): void
    {
        Schema::dropIfExists('tubes');
    }
};

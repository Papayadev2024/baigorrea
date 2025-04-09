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
        Schema::create('messages', function (Blueprint $table) {
            $table->id();

            $table->string('full_name')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->text('message')->nullable();
            $table->string('service_product')->nullable();
            $table->string('source')->nullable();

            $table->string('client_width')->nullable();
            $table->string('client_height')->nullable();
            $table->string('client_latitude')->nullable();
            $table->string('client_longitude')->nullable();
            $table->string('client_system')->nullable();
            $table->string('ip')->nullable();
            $table->string('device')->nullable();

            $table->string('amount')->nullable();
            $table->string('quote')->nullable();
            $table->string('date_buy')->nullable();
            $table->string('project')->nullable();

            $table->boolean('status')->default(true);
            $table->boolean('is_read')->default(false);
            $table->string('comunication')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};

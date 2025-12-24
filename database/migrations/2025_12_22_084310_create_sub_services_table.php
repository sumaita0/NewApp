<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void {
    Schema::create('sub_services', function (Blueprint $table) {
        $table->id();
        $table->foreignId('service_id')->constrained('services')->onDelete('cascade');
        $table->string('title');
        $table->text('description')->nullable();
        $table->string('icon')->nullable();
        $table->decimal('price', 10, 2)->nullable();
        $table->decimal('discount_price', 10, 2)->nullable();
        $table->integer('quantity')->nullable();
        $table->boolean('is_active')->default(true);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_services');
    }
};

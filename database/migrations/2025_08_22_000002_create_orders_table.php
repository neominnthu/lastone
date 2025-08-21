<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('orders', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('customer_id');
            $table->uuid('product_id');
            $table->integer('quantity');
            $table->decimal('total', 12, 2);
            $table->string('status')->default('pending');
            $table->timestamps();

            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->index('product_id');
            // If you have a customers table, add:
            // $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->index('customer_id');
        });
    }
    public function down(): void {
        Schema::dropIfExists('orders');
    }
};

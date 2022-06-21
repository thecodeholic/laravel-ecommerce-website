<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_images', function (Blueprint $table) {
            $table->id();
            $table->string('image', 2000);
            $table->string('mime');
            $table->integer('size');
            $table->boolean('is_primary');
            $table->foreignId('product_id')->references('id')->on('products');
            $table->timestamp('created_at')->nullable();
            $table->foreignIdFor(\App\Models\User::class, 'created_by');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_images');
    }
};

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('title');
                $table->string('category_id')->nullable();
                $table->string('description')->nullable();
                $table->string('price')->nullable();
                $table->string('min_quantity')->nullable();
                $table->string('b2b_Price')->nullable();
                $table->string('image')->nullable();
                $table->string('image_second')->nullable();
                $table->string('image_third')->nullable();                
                $table->string('slug')->nullable();
                $table->integer('created_by')->nullable();
                $table->enum('status',['pending','active','inactive'])->default('pending');
                $table->enum('delete_status', ['0', '1'])->default('0');
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}

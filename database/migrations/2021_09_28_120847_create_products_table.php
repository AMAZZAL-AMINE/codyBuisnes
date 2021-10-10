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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug', 191)->unique();
            $table->text('desc');
            $table->decimal('price', 8,2)->default(0);
            $table->decimal('new_price', 8,2)->default(0)->nullable();
            $table->decimal('version', 8,2)->nullable(); 
            $table->integer('qty')->default(0);
            $table->string('image');
            $table->string('admin_layout')->nullable();
            $table->integer('number_page')->nullable();
            $table->bigInteger('category_id')->unsigned();
            $table->text('drive_url');
            $table->string('img_1')->nullable();
            $table->string('img_2')->nullable();
            $table->string('img_3')->nullable();
            $table->string('img_4')->nullable();
            $table->string('img_5')->nullable();
            $table->string('is_top')->nullable()->unique();
            $table->timestamps();
        });
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

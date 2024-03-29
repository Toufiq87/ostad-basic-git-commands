
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price');
            $table->text('description');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('products');
    }
}
//php artisan migrate
public function up()
{
    Schema::table('products', function (Blueprint $table) {
        $table->integer('quantity')->nullable();
    });
}
//php artisan make:migration add_category_to_products_table


use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddCategoryToProductsTable extends Migration

    public function up()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->string('category', 50)->nullable();
        });
    }

    public function down()
    
        Schema::table('products', function (Blueprint $table) 
            $table->dropColumn('category');

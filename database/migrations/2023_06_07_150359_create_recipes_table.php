<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('categories');
            $table->string('title',250)->unique();
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();
            $table->unsignedInteger('preparation_time')
                ->comment('preparation time in seconds');
            $table->unsignedInteger('num_of_rationes');
            $table->string('ingredients');
            $table->longText('procedure');
            $table->boolean('visible')
                ->default(1);
            $table->dateTime('published_at')->default(now());
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recipes');
    }
}

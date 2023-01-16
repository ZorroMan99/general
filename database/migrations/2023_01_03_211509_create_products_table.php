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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->boolean('general')->default(false);
            $table->string('name');
            $table->text('desc_min');
            $table->text('desc_thin');
            $table->text('check1');
            $table->text('check2');
            $table->text('check3');
            $table->string('img_pc');
            $table->string('img_table');
            $table->string('img_mob');
            $table->string('url');
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
};

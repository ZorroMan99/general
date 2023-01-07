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
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn('product_title','title');
            $table->renameColumn('product_desc_min','desc_min');
            $table->renameColumn('product_img_pc','img_pc');
            $table->renameColumn('product_img_table','img_table');
            $table->renameColumn('product_img_mob','img_mob');
            $table->renameColumn('product_url','url');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            $table->renameColumn('title','product_title');
            $table->renameColumn('desc_min','product_desc_min');
            $table->renameColumn('img_pc','product_img_pc');
            $table->renameColumn('img_table','product_img_table');
            $table->renameColumn('product_img_mob','img_mob');
            $table->renameColumn('url','product_url');
        });
    }
};

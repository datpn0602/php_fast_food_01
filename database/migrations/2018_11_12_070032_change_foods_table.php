<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('foods', function(Blueprint $table) {
            $table->text('description')->change();
            $table->text('information')->change();
            $table->float('rating')->nullable()->change();
            $table->dropColumn('category_id');
            $table->dropColumn('image_detail');
            $table->softDeletes();
            $table->integer('type_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('foods', function (Blueprint $table) {
            $table->string('description')->change();
            $table->string('information')->change();
            $table->float('rating')->change();
            $table->integer('category_id')->unsigned();
            $table->string('image_detail');
            $table->dropColumn('deleted_at');
            $table->dropColumn('type_id');
        });
    }
}

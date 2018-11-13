<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColumnToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) { 
            $table->string('avatar');
            $table->string('confirm_password');
            $table->softDeletes();
            $table->dateTime('birthday')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function ($table) {
            $table->dropColumn('avatar');
            $table->dropColumn('confirm_password');
            $table->dropColumn('deleted_at');
            $table->dropColumn('birthday');
        });
    }
}

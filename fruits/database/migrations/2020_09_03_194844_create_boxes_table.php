<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoxesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boxes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('fruit_id');
            $table->string('name');
            $table->unsignedInteger('capacity');
            $table->unsignedInteger('volume')->default(0);
            $table->timestamps();
            $table->softDeletes('deleted_at', 0);

            $table->foreign('fruit_id')
                ->references('id')
                ->on('fruits')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('boxes', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
}

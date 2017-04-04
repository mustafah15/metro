<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodeLinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('node_lines',function (Blueprint $blueprint){
            $blueprint->integer('node_id')->unsigned();
            $blueprint->integer('line_id')->unsigned();

            $blueprint->foreign('node_id')->references('id')->on('nodes');
            $blueprint->foreign('line_id')->references('id')->on('lines');

            $blueprint->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('node_lines',function (Blueprint $blueprint){
            $blueprint->dropForeign(['node_id']);
            $blueprint->dropForeign(['line_id']);
        });

        Schema::dropIfExists('node_lines');
    }
}

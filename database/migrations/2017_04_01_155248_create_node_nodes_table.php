<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNodeNodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('node_nodes',function (Blueprint $blueprint){
            $blueprint->integer('from_node')->unsigned();
            $blueprint->integer('to_node')->unsigned();

            $blueprint->foreign('from_node')->references('id')->on('nodes')
                ->onDelete('cascade');
            $blueprint->foreign('to_node')->references('id')->on('nodes')
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
        Schema::table('node_nodes', function (Blueprint $table){
            $table->dropForeign(['from_node']);
            $table->dropForeign(['to_node']);
        });

        Schema::dropIfExists('node_nodes');

    }
}

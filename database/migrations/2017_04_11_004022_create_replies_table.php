<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('replies', function (Blueprint $table) {
            //chave estrangeira
            $table->increments('id');
            $table->integer('comment_id')->unsigned(); 
            //o post_id faz referencia ao 'id' da tabela 'posts'
            $table->foreign('comment_id')->references('id')->on('comments'); 
            $table->string('name');
            $table->text('reply');
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
        Schema::dropIfExists('replies');
    }
}

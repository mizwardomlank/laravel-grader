<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProblemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('problems', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('title');
            $table->string('sub_title')->nullable();
            $table->string('slug')->unique();
            $table->text('meta_keyword');
            $table->longText('content');
            
            $table->string('source_code');

            $table->text('sample_input');
            $table->text('sample_output');
        
            $table->enum('is_allow_submit', ['allowed', 'not-allowed']);
            $table->enum('is_allow_judge', ['allowed', 'not-allowed']);
            
            $table->string('colour')->nullable();
            $table->enum('level', ['easy', 'medium', 'hard']);

            $table->integer('time_limit')->unsigned();
            $table->integer('memory_limit')->unsigned();
            
            $table->integer('contest_id')->unsigned();
            $table->integer('user_id')->unsigned();
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
        Schema::dropIfExists('problems');
    }
}

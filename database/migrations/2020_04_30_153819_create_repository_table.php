<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepositoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('repository', function (Blueprint $table) {
           $table->bigIncrements('id');
            $table->string('category');
            $table->string('title')->unique();
            $table->string('file');
            $table->string('studnet_id');
            $table->string('student_name');
            $table->string('department');
            $table->string('supervisor');
            $table->string('date');
            $table->rememberToken();
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
        Schema::dropIfExists('repository');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpProjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('emp_projects', function (Blueprint $table) {
            
            $table->bigIncrements('id');
            $table->unsignedBigInteger('emp_id');
            $table->string('mobilenumber');
            

            $table->foreign('emp_id')->references('id')->on('emp')
                ->onDelete('cascade');
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
        Schema::dropIfExists('emp_projects');
    }
}

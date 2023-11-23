<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            $table->string('type');
            $table->string('site')->nullable();
            $table->string('company');
            $table->date('date_init')->nullable();
            $table->date('date_end')->nullable();
            $table->text('responsibilities_pt')->nullable();
            $table->text('responsibilities_en')->nullable();
            $table->integer('order')->unsigned()->nullable();
            $table->longText('company_image');
            $table->boolean('current_company')->nullable();
            $table->timestamps();
            $table->index('slug');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jobs');
    }
}

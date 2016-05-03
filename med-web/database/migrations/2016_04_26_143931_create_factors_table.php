<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('account_id');
            $table->integer('insurance_type_id');
            $table->integer('citizenship_type_id');
            $table->tinyInteger('is_ibhap')->default(0);
            $table->tinyInteger('is_pregnant')->default(0);
            $table->tinyInteger('has_primary_care')->default(0);
            $table->tinyInteger('is_victim')->default(0);
            $table->string('yearly_income')->nullable();
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
        Schema::drop('factors');
    }
}

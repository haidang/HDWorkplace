<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainModulestable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('mn_modules', function(Blueprint $table) {
      $table->smallIncrements('id');
      $table->string('name');
      $table->string('label')->nullable();
      $table->string('description')->nullable();
      $table->string('fa_icon',50)->nullable()->default('fa fa-cube');
      $table->unsignedSmallInteger('sort')->nullable();
      $table->unsignedTinyInteger('status')->default(1);
      $table->softDeletes();
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
    Schema::dropIfExists('mn_modules');
  }
}

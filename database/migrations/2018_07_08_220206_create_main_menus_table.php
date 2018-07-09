<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMainMenusTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::create('mn_menus_category', function(Blueprint $table) {
      $table->smallIncrements('id');
      $table->string('name');
      $table->string('label')->nullable();
      $table->string('description')->nullable();
      $table->unsignedTinyInteger('status')->default(1);
      $table->softDeletes();
      $table->timestamps();
    });
    Schema::create('mn_menus', function(Blueprint $table) {
      $table->smallIncrements('id');
      $table->unsignedSmallInteger('id_category');
      $table->unsignedSmallInteger('parent')->nullable()->default(0);
      $table->string('name');
      $table->string('label')->nullable();
      $table->string('description')->nullable();
      $table->string('fa_icon',50)->nullable()->default('fa fa-cube');
      $table->string('url')->nullable();
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
    Schema::dropIfExists('mn_menus');
    Schema::dropIfExists('mn_menus_category');
  }
}

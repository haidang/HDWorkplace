<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditUsersTable extends Migration
{
  /**
  * Run the migrations.
  *
  * @return void
  */
  public function up()
  {
    Schema::table('mn_users', function (Blueprint $table) {
      $table->string('address')->after('password');
      $table->string('mobile',20)->after('address');
    });
  }

  /**
  * Reverse the migrations.
  *
  * @return void
  */
  public function down()
  {
    Schema::table('mn_users', function (Blueprint $table) {
      $table->dropColumn('address');
      $table->dropColumn('mobile');
    });
  }
}

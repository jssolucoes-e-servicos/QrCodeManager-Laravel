<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

/**
 * Class CreateQrCodesTable.
 */
class CreateQrCodesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('qrcodes', function (Blueprint $table) {
      $table->increments('id');
      $table->string('title', 254);
      $table->string('url', 254);
      $table->integer('group_id')->unsigned();
      $table->integer('user_id')->unsigned();
      $table->string('qrcode_svg', 255)->nullable();
      $table->string('active', 50);
      $table->timestamps();
      $table->softDeletes();
      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('group_id')->references('id')->on('qrcodes_groups');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('qrcodes', function (Blueprint $table) {
      $table->dropForeign('qrcodes_users_id_foreign');
      $table->dropForeign('qrcodes_group_id_foreign');
    });
    Schema::drop('qrcodes');
  }
}

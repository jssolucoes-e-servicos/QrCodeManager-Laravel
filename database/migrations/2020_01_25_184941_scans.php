<?php

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Scans extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('scans', function (Blueprint $table) {
      $table->increments('id');
      $table->integer('qrcode_id')->unsigned();
      $table->string('ip', 100)->nullable();
      $table->timestamps();
      $table->softDeletes();

      $table->foreign('qrcode_id')->references('id')->on('qrcodes');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::table('scans', function (Blueprint $table) {
      $table->dropForeign('scans_qrcodes_id_foreign');
    });
    Schema::dropIfExists('scans');
  }
}

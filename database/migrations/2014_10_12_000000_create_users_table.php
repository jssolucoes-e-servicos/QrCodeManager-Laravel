<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->increments('id');
      $table->char('cnpj', 18)->unique()->nullable();
      $table->string('name', 255);
      $table->string('ie', 25)->nullable()->default('ISENTO');
      $table->string('phone1', 11);
      $table->string('phone2', 11)->nullable();
      $table->string('email', 254);
      $table->char('cep', 8)->nullable();
      $table->string('public_place', 254)->nullable();
      $table->string('number', 254)->nullable();
      $table->string('complement', 254)->nullable();
      $table->string('district', 254)->nullable();
      $table->string('city', 254)->nullable();
      $table->char('uf', 2)->nullable();
      $table->string('status', 10)->default('active')->nullable();
      $table->string('role', 40)->default('user')->nullable();
      $table->string('alias', 80);
      $table->string('password', 254)->nullable();
      $table->integer('group_default')->unsigned()->nullable();
      $table->string('avatar', 254)->nullable()->default('https://www.gravatar.com/avatar/f7052983a10ed2d49d350a2338217934');
      $table->rememberToken();
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
    Schema::dropIfExists('users');
  }
}

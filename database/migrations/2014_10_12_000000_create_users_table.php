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
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('phone')->nullable();
            $table->string('image')->default('default.png');
            $table->integer('status')->default(1);
            $table->integer('is_admin')->unsigned()->default(0);
            $table->decimal('balance', 20, 2)->default(0);
            $table->decimal('demo_balance', 20, 2)->default(10000);
            $table->unsignedBigInteger('currency_id')->nullable();
            $table->unsignedBigInteger('plan_id')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('wallet')->nullable();
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
        Schema::dropIfExists('users');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_kafaactivities', function (Blueprint $table) {
            $table->id();
            $table->string('ActivityName');
            $table->string('ActivityLocation');
            $table->date('ActivityDate');
            $table->time('ActivityTime');
            $table->string('ActivityDesc')->default('');
            $table->string('ActivityMode');
            $table->string('ActivityPeriod');
            $table->string('ActivityStatus');
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
        Schema::dropIfExists('_kafaactivities');
    }
};

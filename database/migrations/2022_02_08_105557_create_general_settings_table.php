<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeneralSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('general_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('language');
            $table->string('address');
            $table->string('phone');
            $table->string('email');
            $table->string('payment_tax');
            $table->string('footer');
            $table->string('attendencemodel');
            $table->string('exam_details');
            $table->string('send_examdetails');
            $table->string('studants_absance');
            $table->string('multiple');
            $table->string('logo');
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
        Schema::dropIfExists('general_settings');
    }
}

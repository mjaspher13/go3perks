<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('merchant_id');
            $table->string('iso_id')->nullable();
            $table->string('agent_id');
            $table->string('merchant_code');
            $table->string('merchant_name');
            $table->string('merchant_logo');
            $table->integer('business_type');
            $table->text('address');
            $table->string('city');
            $table->text('state');
            $table->integer('zip');
            $table->string('country');
            $table->string('support_email');
            $table->integer('support_contact_number');
            $table->integer('telephone')->nullable();
            $table->integer('fax')->nullable();
            $table->string('created_by');
            $table->timestamps();
            $table->string('updated_by');
            $table->char('status');
            $table->text('attachment')->nullable();
            $table->decimal('latitude', 10, 7);
            $table->decimal('longitude', 10, 7);
            $table->string('sound')->nullable();
            $table->integer('punchcard_notif');
            $table->integer('promo_notif');
            $table->string('fcm_token')->nullable();
            $table->string('custom_app');
            $table->text('video_message')->nullable();
            $table->string('video_url')->nullable();
            $table->string('merchant_banner')->nullable();
            $table->string('bg_color')->nullable();
            $table->string('th_color')->nullable();
            $table->integer('check_in_rate');
            $table->integer('display_checkin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('merchants');
    }
}

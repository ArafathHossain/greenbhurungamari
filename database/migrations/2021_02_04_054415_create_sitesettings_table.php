<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSitesettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sitesettings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('company_email');
            $table->string('company_phone1')->nullable();
            $table->string('company_phone2')->nullable();
            $table->string('company_mobile')->nullable();
            $table->string('company_address')->nullable();
            $table->string('logo')->nullable();
            $table->string('fav_icon')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('twitter_link')->nullable();
            $table->string('pinterest_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('linkedin_link')->nullable();
            $table->string('youtube_link')->nullable();

            $table->string('slide_image1')->nullable();
            $table->string('slide_image2')->nullable();
            $table->string('slide_image3')->nullable();

            $table->string('p1_name')->nullable();
            $table->string('p1_image')->nullable();
            $table->string('p1_designation')->nullable();
            $table->string('p2_name')->nullable();
            $table->string('p2_image')->nullable();
            $table->string('p2_designation')->nullable();
            $table->string('p3_name')->nullable();
            $table->string('p3_image')->nullable();
            $table->string('p3_designation')->nullable();
            $table->string('local_hotline_image')->nullable();
            $table->string('national_hotline_image')->nullable();
            $table->string('ads_image1')->nullable();
            $table->string('ads_image2')->nullable();
            $table->string('ads_image3')->nullable();
            $table->string('ads_image4')->nullable();
            $table->string('ads_image5')->nullable();
            $table->string('ads_image6')->nullable();
            
            $table->longtext('aboutus')->nullable();
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
        Schema::dropIfExists('sitesettings');
    }
}

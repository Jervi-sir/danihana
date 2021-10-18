<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {

            $table->id();
            
            //personal data
            $table->string('title')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('email')->nullable();
            $table->string('latitude_longitude')->nullable();

            //images 
            $table->string('main_image')->nullable();
            $table->string('gallery')->nullable();
            $table->string('about_images')->nullable();
            $table->string('music_side_image')->nullable();

            //social Media
            $table->string('spotify_link')->nullable();
            $table->string('apple_link')->nullable();
            $table->string('instagram_link')->nullable();
            $table->string('facebook_link')->nullable();
            $table->string('linked_link')->nullable();

            //other
            $table->string('embed_spotify_link')->nullable();
            $table->string('video_link')->nullable();

            //added latety
            $table->string('title_gallery')->nullable();
            $table->string('description_gallery')->nullable();
            $table->string('website_link')->nullable();
            $table->string('logo_image')->nullable();
            $table->string('slogan')->nullable();


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
        Schema::dropIfExists('homes');
    }
}

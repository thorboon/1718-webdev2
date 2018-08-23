<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Carbon\Carbon;

class CreateAuctionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('auctions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->integer('category_id')->nullable();

            $table->string('title', 255);
            $table->text('description');
            $table->string('dimensions', 255)->nullable();
            $table->enum('condition', ['nieuw', 'oud', 'tweedehands'])->default('nieuw')->nullable();
            $table->enum('shipment', ['bpost', 'dhl', 'ophaalpunt'])->default('bpost')->nullable();

            $table->integer('price')->default(10);
            $table->integer('min_bid')->default(1);
            
            $table->string('image')->default('default_image.jpg');

            $table->boolean('isBoosted')->default(false);
            $table->timestamp('timer')->default(Carbon::now());
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
        Schema::dropIfExists('auctions');
    }
}

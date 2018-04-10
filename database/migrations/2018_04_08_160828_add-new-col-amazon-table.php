<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNewColAmazonTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('amazonfiles', function (Blueprint $table) {

            $table->string('gift_wrap_type')->nullable();
            $table->string('gift_message_text')->nullable();
            $table->string('purchase_order_number')->nullable();
            $table->string('price_designation')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}

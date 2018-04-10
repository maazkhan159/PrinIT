<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmazonFileTable extends Migration
{
    private $table_name = "amazonfiles";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table_name, function (Blueprint $table) {
            $table->increments('id');
            $table->string('file_id');
            $table->string('order_id')->nullable();
            $table->string('order_item_id')->nullable();
            $table->date('purchase_date')->nullable();
            $table->date('payments_date')->nullable();
            $table->date('reporting_date')->nullable();
            $table->date('promise_date')->nullable();
            $table->string('days_past_promise')->nullable();
            $table->string('buyer_email')->nullable();
            $table->string('buyer_name')->nullable();
            $table->string('buyer_phone_number')->nullable();
            $table->string('sku')->nullable();
            $table->string('product_name')->nullable();
            $table->string('quantity_purchased')->nullable();
            $table->string('quantity_shipped')->nullable();
            $table->string('quantity_to_ship')->nullable();
            $table->string('ship_service_level')->nullable();
            $table->string('recipient_name')->nullable();
            $table->string('ship_address_1')->nullable();
            $table->string('ship_address_2')->nullable();
            $table->string('ship_city')->nullable();
            $table->string('ship_state')->nullable();
            $table->string('ship_postal_code')->nullable();
            $table->string('ship_country')->nullable();
            $table->string('is_business_order')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->table_name);
    }
}

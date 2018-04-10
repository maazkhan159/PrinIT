<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEbayFileTable extends Migration
{
    private $table_name = "ebayfiles";
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
            $table->string('sales_record_number')->nullable();
            $table->string('user_id')->nullable();
            $table->string('buyer_full_name')->nullable();
            $table->string('buyer_email')->nullable();
            $table->string('buyer_address_1')->nullable();
            $table->string('buyer_address_2')->nullable();
            $table->string('buyer_state')->nullable();
            $table->string('buyer_city')->nullable();
            $table->string('buyer_postcode')->nullable();
            $table->string('buyer_country')->nullable();
            $table->string('item_id')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('item_title')->nullable();
            $table->string('quantity')->nullable();
            $table->string('sale_price')->nullable();
            $table->string('included_vat_rate')->nullable();
            $table->string('postage_packaging')->nullable();
            $table->string('insurance')->nullable();
            $table->string('total_price')->nullable();
            $table->string('payment_method')->nullable();
            $table->string('paypal_transaction_id')->nullable();
            $table->string('sale_date')->nullable();
            $table->string('checkout_date')->nullable();
            $table->string('paid_on_date')->nullable();
            $table->string('postage_service')->nullable();
            $table->string('feedback_left')->nullable();
            $table->string('custom_label')->nullable();
            $table->string('delivery_address_1')->nullable();
            $table->string('delivery_address_2')->nullable();
            $table->string('delivery_state')->nullable();
            $table->string('delivery_city')->nullable();
            $table->string('delivery_postcode')->nullable();
            $table->string('delivery_country')->nullable();
            $table->string('variation_details')->nullable();




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

<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFileInfoTable extends Migration
{
    private $table_name = "FileInfos";
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
            $table->string('name');
            $table->string('address');
            $table->string('code');
            $table->string('type_of_shipment');
            $table->date('date');
//            $table->foreign('file_id')->references('id')->on('Files');
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
        Schema::drop($this->table_name);
    }
}

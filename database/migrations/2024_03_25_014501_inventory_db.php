<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        //
        Schema::create('products_table', function (Blueprint $table) {
            //Item id
            $table->bigIncrements('item_id'); //Primary Key if Any

            //Need Info
            $table->string('Model_Name');
            $table->string('Category'); //
            $table->string('Department_assigned_item_location');
            $table->bigInteger('expected_quantity');
            $table->bigInteger('actual_quantity');
            $table->date('Date_Arrived_Listed_Date')->nullable();
            $table->date('Date_Checked')->nullable();
            $table->string('SKU_Serial_Number');

            //Auto Generate
            $table->string('Model_code')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('products_table');
    }
};

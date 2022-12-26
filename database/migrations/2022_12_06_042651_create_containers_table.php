<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('containers', function (Blueprint $table) {
            $table->id();
            $table->integer('bl_number')->nullable();
            $table->string('container_no')->nullable();
            $table->string('c_size')->nullable();
            $table->string('seal_no')->nullable();
            $table->string('vessel_name')->nullable();
            $table->string('voyage')->nullable();
            $table->string('place_receipt')->nullable();
            $table->string('place_loading')->nullable();
            $table->string('port_discharge')->nullable();
            $table->string('final_destination')->nullable();
            $table->string('comidity')->nullable();
            $table->date('etd')->nullable();
            $table->date('eta')->nullable();
            $table->date('shipped_board')->nullable();
            $table->date('bl_type')->nullable();
            $table->string('softDeletes')->default(1)->nullable();
            $table->date('issue_date')->nullable();
            $table->string('location')->nullable();
            $table->string('status')->nullable();
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
        Schema::dropIfExists('containers');
    }
}
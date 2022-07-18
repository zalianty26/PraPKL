<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_staff', function (Blueprint $table) {
            $table->id();
            $table->string('staffNo')-> unique();
            $table->string('sname');
            $table->string('position');
            $table->string('salary');
            $table->string('branchNo');
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
        Schema::dropIfExists('_staff');
    }
}

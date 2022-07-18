<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff_branches', function (Blueprint $table) {
            $table->id();
            $table->string('staffNo')-> unique();
            $table->string('sname');
            $table->string('position');
            $table->string('salary');
            $table->string('branchNo');
            $table->string('bAddress');
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
        Schema::dropIfExists('staff_branches');
    }
}

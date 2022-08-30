<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branch_level_subject_units', function (Blueprint $table) {
            $table->foreignId('level_id')->constrained();
            $table->foreignId('branch_id')->constrained();
            $table->foreignId('subject_id')->constrained();
            $table->foreignId('unit_id')->constrained();
            $table->primary(['level_id','branch_id','unit_id']);

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
        Schema::dropIfExists('branch_level_subject_units');
    }
};

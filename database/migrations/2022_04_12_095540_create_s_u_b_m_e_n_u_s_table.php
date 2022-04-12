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
        Schema::create('s_u_b_m_e_n_u_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');  
            $table->unsignedBigInteger('menu_id');
            $table->string('status');
            $table->string('link');
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
        Schema::dropIfExists('s_u_b_m_e_n_u_s');
    }
};

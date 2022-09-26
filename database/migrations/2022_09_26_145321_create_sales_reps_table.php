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
        Schema::create('sales_reps', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 100);
            $table->string('email',50);
            $table->string('tel',10);
            $table->date('joined_date');
            $table->enum('current_route',['Barnes Place'=>'Barnes Place','Rosmid Place'=>'Rosmid Place','Cambridge Place'=>'Cambridge Place','Gregory Road'=>'Gregory Road']);
            $table->text('comments')->nullable();
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
        Schema::dropIfExists('sales_reps');
    }
};

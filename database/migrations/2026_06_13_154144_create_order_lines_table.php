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
        Schema::create('order_lines', function (Blueprint $table) {
            $table->increments("id");
            $table->integer("quantity")->unsigned();
            $table->decimal("price", 10, 2);
            $table->decimal("subtotal_line", 10, 2);

            $table->integer("articles_id")->unsigned();
            $table->foreign("articles_id")->references("id")->on("articles")->onDelete("cascade")->onUpdate("cascade");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_lines');
    }
};

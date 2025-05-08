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
        Schema::create('ab_article', function (Blueprint $table) {
            $table->id();
            $table->string('ab_name', 80);
            $table->integer('ab_price');
            $table->string('ab_description', 1000);
            $table->unsignedBigInteger('ab_creator_id');
            $table->timestamp('ab_createdate')->useCurrent();

            $table->foreign('ab_creator_id')->references('id')->on('ab_user')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ab_article');
    }
};

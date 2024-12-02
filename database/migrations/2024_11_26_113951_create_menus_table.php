<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('label');
            $table->string('slug')->unique();
            $table->string('page_title')->nullable();
            $table->text('short_description')->nullable();
            $table->string('image1')->nullable();
            $table->string('image2')->nullable();
            $table->string('image3')->nullable();
            $table->string('questions')->nullable();
            $table->text('answer_description')->nullable();
            $table->json('list')->nullable();
            // $table->string('icon_title')->nullable();
            // $table->string('icon')->nullable();
            // $table->text('icon_description')->nullable();
            // $table->string('item_icon_title')->nullable();
            // $table->string('item_icon')->nullable();
            // $table->json('item_list')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
};

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
        Schema::create('ad_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->foreignId('category_id')->nullable();
            $table->foreignId('type_id')->nullable();
            $table->foreignId('city_id')->nullable();
            $table->string('title')->nullable();
            $table->string('model')->nullable();
            $table->string('company_name')->nullable();
            $table->string('compnay_logo')->nullable();
            $table->string('area_name')->nullable();
            $table->string('description')->nullable();
            $table->string('price_per_day')->nullable();
            $table->string('price_per_week')->nullable();
            $table->string('price_per_month')->nullable();
            $table->string('feature_image')->nullable();
            $table->string('premium_add')->nullable();
            $table->enum('admin_apporval',['rejected','pending','approved'])->default('pending')->nullable();
            $table->enum('status',['active','unactive'])->default('unactive')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ad_posts');
    }
};

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
        Schema::table('ad_posts', function (Blueprint $table) {
            $table->string('age')->after('model')->nullable();
            $table->string('contactby')->after('compnay_logo')->nullable();
            $table->string('driver')->after('contactby')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ad_posts', function (Blueprint $table) {
            $table->dropColumn('age');
            $table->dropColumn('contactby');
            $table->dropColumn('driver');
        });
    }
};

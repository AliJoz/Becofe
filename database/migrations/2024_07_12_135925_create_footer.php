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
        Schema::connection('mysql-setting')->create('footer', function (Blueprint $table) {
            $table->id();
            $table->string('uplable')->nullable();
            $table->string('widerLable1')->nullable();
            $table->string('widerLable2')->nullable();
            $table->string('widerLable3')->nullable();
            $table->string('widerLable4')->nullable();
            $table->string('widerLable5')->nullable();
            $table->string('rrsLable')->nullable();
            $table->string('soctaiLable')->nullable();
            $table->string('suppirtLable')->nullable();
            $table->string('phoneLable')->nullable();
            $table->string('addresLable')->nullable();
            $table->string('emailLable')->nullable();
            $table->string('aboutHeadLable')->nullable();
            $table->text('aboutbodyLable')->nullable();
            $table->text('copyright')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql-setting')->dropIfExists('footer');
    }
};
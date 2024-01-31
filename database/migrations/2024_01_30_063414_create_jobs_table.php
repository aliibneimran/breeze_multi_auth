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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('title',10);
            $table->string('position',50);
            $table->integer('salary');
            $table->integer('vacancy');
            $table->string('image',50);
            $table->boolean('availability');
            $table->integer('category_id');
            $table->integer('location_id');
            $table->integer('industry_id');
            $table->integer('company_id');
            $table->text('description');
            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};

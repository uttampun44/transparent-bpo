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
            $table->string('company_name');
            $table->string('job_category');
            $table->string('company_image');
            $table->string('job_post');
            $table->text('job_responsibilities');
            $table->text('requirement');
            $table->string('salary');
            $table->string('location');
            $table->string('job_post_slug');
            $table->string('job_type');
            $table->string('career_level');
            $table->date('job_deadline');
            $table->text('job_description');
            $table->unsignedBigInteger('job_category_id')->nullable();
            $table->foreign('job_category_id')->references('id')->on('jobcategories')
            ->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
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

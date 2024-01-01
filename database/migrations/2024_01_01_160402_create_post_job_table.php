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
    Schema::create('post_job', function (Blueprint $table) {
        $table->id('post_job_id', 50);
        $table->string('job_title', 50);
        $table->string('organization');
        $table->string('qualification');
        $table->string('job_type');
        $table->string('job_description', 300);
        $table->string('required_skill', 300);
        $table->timestamps();
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_job');
    }
};

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
        Schema::table('jobs', function (Blueprint $table) {
            $table->string('location')->after('job_post');
            $table->string('job_responsibilities')->after('job_post');
            $table->string('requirement')->after('job_responsibilities');
            $table->string('salary')->after('requirement');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->dropColumn('location');
            $table->dropColumn('job_responsibilities');
            $table->dropColumn('requirement');
            $table->dropColumn('salary');
        });
    }
};

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
            //
            $table->unsignedBigInteger('jobtype_id')->nullable();
 
            $table->foreign('jobtype_id')->references('id')->on('jobtype');
            // $table->foreignId('jobtype_id')->constrained('jobtype','id')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jobs', function (Blueprint $table) {
            //
            $table->removeColumn('jobtype_id');
        });
    }
};

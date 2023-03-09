<?php

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->uuid('id')->default(Uuid::uuid4()->toString());
            $table->char('COURSE_ID', 3)->primary();
            $table->string('COURSE_NAME', 15);
            $table->string('COURSE_DOCS', 256)->nullable();
            $table->unsignedInteger('COURSE_MAX_SEATS');
            $table->double('COURSE_FEE', 6, 2);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};

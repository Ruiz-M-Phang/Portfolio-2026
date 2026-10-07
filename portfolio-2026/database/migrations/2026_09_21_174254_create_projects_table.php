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
        Schema::create('projects', function (Blueprint $table) { // Note to Ruiz M. Phang: Don't edit $table->id(); and $table->timestamps();
            $table->id();
            $table->string('name');
            $table->string('image_url');
            $table->string('image_alt');
            $table->string('description');
            $table->string('url_link');
            $table->string('github_link');
            $table->string('first_tag');
            $table->string('second_tag');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};

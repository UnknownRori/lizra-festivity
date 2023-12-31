<?php

use App\Enums\PublishStatus;
use App\Models\User;
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
        Schema::create('news', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('slug', 255)->unique();
            $table->string('thumbnail', 255)->nullable();
            $table->string('thumbnail_url', 255)->nullable();
            $table->string('title', 255);
            $table->text('body');
            $table->string('description', 255);
            $table->enum('publish_status', PublishStatus::toArray())->default(PublishStatus::Draft->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news');
    }
};

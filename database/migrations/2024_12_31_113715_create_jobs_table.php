<?php

use App\Models\Employers;
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
            $table->foreignIdFor(Employers::class)->constrained()->onDelete('cascade');
            $table->string('title');
            $table->text('description');
            $table->string('salary');
            $table->string('location'); 
            $table->string('type')->default('Full Time');
            $table->string('url');
            $table->boolean('featured')->default(false);
          
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

<?php

use App\Models\hero;
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
        Schema::create('heroes', function (Blueprint $table) {
            $table->id();
            $table->string('title_top');
            $table->string('title_bottom');
            $table->string('thumbnail');
            $table->longText('content');
            $table->timestamps();
        });

        hero::create([
            'title_top' => 'Title Top',
            'title_bottom' => 'Title Bottom',
            'thumbnail' => 'Laravel',
            'content' => 'Lorem ipsum dolor sit amet',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};

<?php

use App\Models\VisionMission;
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
        Schema::create('vision_missions', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->longText('value');
            $table->string('type');
            $table->timestamps();
        });

        VisionMission::create([
            'key' => '_vision',
            'label' => 'Visi',
            'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'type' => 'longtext',
        ]);

        VisionMission::create([
            'key' => '_mission',
            'label' => 'Misi',
            'value' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
            'type' => 'longtext',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vision_missions');
    }
};

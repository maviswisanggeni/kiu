<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('key');
            $table->string('label');
            $table->string('value')->nullable();
            $table->string('type');
            $table->timestamps();
        });

        Setting::create([
            'key' => '_site_name',
            'label' => 'Judul Situs',
            'value' => 'Laravel',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_site_description',
            'label' => 'Deskripsi Situs',
            'value' => 'Laravel',
            'type' => 'longtext',
        ]);

        Setting::create([
            'key' => '_site_logo',
            'label' => 'Logo Situs',
            'value' => 'Laravel',
            'type' => 'image',
        ]);

        Setting::create([
            'key' => '_site_favicon',
            'label' => 'Favicon Situs',
            'value' => 'Laravel',
            'type' => 'image',
        ]);

        Setting::create([
            'key' => '_location',
            'label' => 'Alamat',
            'value' => 'Indonesia',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_email',
            'label' => 'Email',
            'value' => 'email@gmail.com',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_phone',
            'label' => 'Nomor Telepon',
            'value' => '081234567890',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_facebook',
            'label' => 'Facebook',
            'value' => 'https://facebook.com',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_instagram',
            'label' => 'Instagram',
            'value' => 'https://instagram.com',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_youtube',
            'label' => 'Youtube',
            'value' => 'https://twitter.com',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_twitter',
            'label' => 'Twitter',
            'value' => 'https://twitter.com',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_longtitude',
            'label' => 'Longtitude',
            'value' => '0',
            'type' => 'text',
        ]);

        Setting::create([
            'key' => '_latitude',
            'label' => 'Latitude',
            'value' => '0',
            'type' => 'text',
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};

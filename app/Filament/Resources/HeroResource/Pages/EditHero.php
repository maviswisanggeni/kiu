<?php

namespace App\Filament\Resources\HeroResource\Pages;

use App\Filament\Resources\HeroResource;
use App\Models\Hero;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditHero extends EditRecord
{
    protected static string $resource = HeroResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make()->after(
            //     function(hero $record){
            //         if($record->thumbnail){
            //             Storage::disk('public')->delete($record->thumbnail);
            //         }
            //     }
            // ),
        ];
    }
}

<?php

namespace App\Filament\Resources\UniteResource\Pages;

use App\Filament\Resources\UniteResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUnites extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = UniteResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),

        ];
    }
}

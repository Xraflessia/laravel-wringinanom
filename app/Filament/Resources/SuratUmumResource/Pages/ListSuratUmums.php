<?php

namespace App\Filament\Resources\SuratUmumResource\Pages;

use App\Filament\Resources\SuratUmumResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSuratUmums extends ListRecords
{
    protected static string $resource = SuratUmumResource::class;
    protected static ?string $title = 'List Surat Umum';

    protected function getHeaderActions(): array
    {
        return [];
    }
}

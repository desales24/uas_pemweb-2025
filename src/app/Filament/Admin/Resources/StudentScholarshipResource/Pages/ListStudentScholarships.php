<?php

namespace App\Filament\Admin\Resources\StudentScholarshipResource\Pages;

use App\Filament\Admin\Resources\StudentScholarshipResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListStudentScholarships extends ListRecords
{
    protected static string $resource = StudentScholarshipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Admin\Resources\StudentScholarshipResource\Pages;

use App\Filament\Admin\Resources\StudentScholarshipResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditStudentScholarship extends EditRecord
{
    protected static string $resource = StudentScholarshipResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}

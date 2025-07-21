<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\StudentScholarshipResource\Pages;
use App\Models\StudentScholarship;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class StudentScholarshipResource extends Resource
{
    protected static ?string $model = StudentScholarship::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';
    protected static ?string $navigationLabel = 'Scholarship Recipients';
    protected static ?string $pluralModelLabel = 'Scholarship Recipients';
    protected static ?string $navigationGroup = 'Manajemen Mahasiswa';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Select::make('student_id')
                ->label('Student')
                ->relationship('student', 'name')
                ->searchable()
                ->required(),

            Forms\Components\Select::make('scholarship_id')
                ->label('Scholarship')
                ->relationship('scholarship', 'name')
                ->searchable()
                ->required(),

            Forms\Components\DatePicker::make('awarded_at')
                ->label('Awarded At')
                ->required(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('student.name')->label('Student')->searchable(),
                Tables\Columns\TextColumn::make('scholarship.name')->label('Scholarship')->searchable(),
                Tables\Columns\TextColumn::make('awarded_at')->label('Awarded At')->date(),
                Tables\Columns\TextColumn::make('created_at')->label('Created')->dateTime()->sortable()->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStudentScholarships::route('/'),
            'create' => Pages\CreateStudentScholarship::route('/create'),
            'edit' => Pages\EditStudentScholarship::route('/{record}/edit'),
        ];
    }
}

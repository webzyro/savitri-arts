<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('caption')
                    ->required(),
                Toggle::make('is_active')
                    ->default(true)
                    ->required(),
                FileUpload::make('image')
                    ->disk('uploads')
                    ->directory('projects')
                    ->image()
                    ->required(),
            ]);
    }
}

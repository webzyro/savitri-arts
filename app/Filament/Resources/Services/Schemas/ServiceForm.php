<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->required(),
                TextInput::make('slug')
                    ->label('Slug')
                    ->unique(ignoreRecord: true)
                    ->required(),
                RichEditor::make('description')
                    ->label('Description')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('image')
                    ->disk('uploads')
                    ->directory('services')
                    ->label('Image')
                    ->image()
                    ->required(),
                TextInput::make('meta_title')
                    ->label('Meta Title')
                    ->required(),
                TextInput::make('meta_description')
                    ->label('Meta Description')
                    ->required(),
                TextInput::make('meta_keywords')
                    ->label('Meta Keywords')
                    ->required(),
                Toggle::make('is_active')
                    ->required(),
            ]);
    }
}

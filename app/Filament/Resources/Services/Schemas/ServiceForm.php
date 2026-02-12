<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Toggle;

use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Service Information')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('title')
                                    ->required()
                                    ->maxLength(255),

                                TextInput::make('slug')
                                    ->required()
                                    ->unique(ignoreRecord: true)
                                    ->maxLength(255),
                            ]),

                        RichEditor::make('description')
                            ->required()
                            ->columnSpanFull(),

                        FileUpload::make('image')
                            ->disk('uploads')
                            ->directory('services')
                            ->image()
                            ->required(),
                    ])->columnSpanFull(),

                Section::make('Optional Content')
                    ->schema([
                        TextInput::make('sub_title')
                            ->placeholder('Why Choose Us'),

                        Textarea::make('sub_desc')
                            ->rows(3),

                        Textarea::make('process_text')
                            ->rows(3),
                    ])->columnSpanFull(),

                Section::make('Features Card')
                    ->schema([
                        Repeater::make('features')
                            ->relationship()
                            ->schema([
                                TextInput::make('title')
                                    ->label('Feature Title')
                                    ->placeholder('Tailored Home Designs')
                                    ->required(),

                                Textarea::make('description')
                                    ->label('Feature Description')
                                    ->placeholder('We create homes that truly reflect your...')
                                    ->required(),

                                TextInput::make('icon')
                                    ->label('Feature Icon')
                                    ->placeholder('fa-solid fa-shapes')
                                    ->required(),
                            ])
                            ->collapsible()
                            ->reorderable()
                            ->defaultItems(0)

                    ])->columnSpanFull(),

                Section::make('SEO Settings')
                    ->schema([
                        Grid::make(2)
                            ->schema([
                                TextInput::make('meta_title')
                                    ->required(),

                                TextInput::make('meta_keywords')
                                    ->required(),
                            ]),

                        Textarea::make('meta_description')
                            ->required()
                            ->rows(3),

                        Toggle::make('is_active')
                            ->default(true),
                    ])->columnSpanFull()
                    ->collapsible(),
            ]);
    }
}

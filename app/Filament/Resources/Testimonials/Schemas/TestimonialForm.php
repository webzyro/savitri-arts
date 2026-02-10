<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('author')
                    ->label('Author Name')
                    ->required(),
                TextInput::make('position')
                    ->label('Author Position')
                    ->required(),
                Textarea::make('feedback')
                    ->label('Feedback')
                    ->required()
                    ->columnSpanFull(),
                FileUpload::make('author_img')
                    ->disk('uploads')
                    ->directory('testimonials')
                    ->label('Author Image')
                    ->required(),
                FileUpload::make('banner_img')
                    ->disk('uploads')
                    ->directory('testimonials')
                    ->label('Banner Image')
                    ->required(),
            ]);
    }
}

<?php

namespace App\Filament\Resources\Posts\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\ColorPicker;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Components\Group;
use Filament\Schemas\Components\Section;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
    ->components([
        Section::make("Post Details")
            ->description("Fill in the details of the post")
            ->icon('heroicon-o-document-text')
            ->schema([
                Group::make([
                    TextInput::make("title")
                        ->required()
                        ->rules('min:5|max:100')
                        ->validationMessages([
                            'min' => 'Judul minimal harus 5 karakter bos.',
                        ]),

                    TextInput::make("slug")
                        ->required()
                        ->unique(ignoreRecord: true) 
                        ->rules('min:3')
                        ->validationMessages([
                            'unique' => 'Slug sudah dipakai, cari yang lain!',
                            'min' => 'Slug kependekan, minimal 3 karakter ya.',
                        ]),

                    // Select::make("category_id")
                    //     ->relationship("category", "name")
                    //     ->required()
                    //     ->preload()
                    //     ->searchable(),

                    ColorPicker::make("color"),
                ])->columns(2),

                MarkdownEditor::make("content")
                    ->columnSpan(2),
            ])->columnSpan(2),

        Group::make([
            Section::make("Image Upload")
                ->schema([
                    FileUpload::make("image")
                        ->required()
                        ->disk("public")
                        ->directory("posts"),
                ]),
        ]),
    ]);  
    }
}
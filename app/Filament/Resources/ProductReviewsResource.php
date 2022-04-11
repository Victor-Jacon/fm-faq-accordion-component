<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductReviewsResource\Pages;
use App\Filament\Resources\ProductReviewsResource\RelationManagers;
use App\Models\ProductReviews;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TextArea;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ViewColumn;


class ProductReviewsResource extends Resource
{
    protected static ?string $model = ProductReviews::class;
    protected static ?string $navigationIcon = 'heroicon-o-collection';
    protected static ?string $recordTitleAttribute = 'title';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('slug')->label('Slug'),
                TextInput::make('author')->label('Author'),
                TextInput::make('category')->label('Category'),
                TextInput::make('title')->label('Title'),
                TextArea::make('excerpt')->label('Excerpt'),
                MarkdownEditor::make('body')->label('Body'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('slug')->label('Slug'),
                TextColumn::make('author')->label('Author'),
                TextColumn::make('category')->label('Category'),
                TextColumn::make('title')->label('Title'),
            ])
            ->filters([
                //
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProductReviews::route('/'),
            'create' => Pages\CreateProductReviews::route('/create'),
            'edit' => Pages\EditProductReviews::route('/{record}/edit'),
        ];
    }
}

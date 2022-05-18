<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Forms\Components\Gutenberg;
use App\Models\Age;
use App\Models\Category;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\BelongsToSelect;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'story-pic';

    protected static ?int $navigationSort = 1;
    protected static ?string $navigationLabel = 'Les histoires';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                Select::make('category_id')->options(Category::all()->pluck('title', 'id'))->required(),
                Select::make('age_id')->options(Age::all()->pluck('title', 'id'))->required(),
                TextInput::make('excerpt')->required(),
                TextInput::make('lb_content')->required(),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->label('Auteur'),
                Tables\Columns\TextColumn::make('title')->label('Titre')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('age.title')->label('Âge')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category.title')->label('Catégorie')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('lb_raw_content')->label('Contenu')
                    ->searchable(),


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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}

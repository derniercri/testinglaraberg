<?php

namespace App\Filament\Resources\UserResource\RelationManagers;

use App\Forms\Components\Gutenberg;
use App\Models\Age;
use App\Models\Category;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\RelationManagers\HasManyRelationManager;
use Filament\Resources\Table;
use Filament\Tables;
use PhpParser\Node\Expr\Closure;

class PostsRelationManager extends HasManyRelationManager
{
    protected static string $relationship = 'posts';

    protected static ?string $recordTitleAttribute = 'title';

//    protected function getTableRecordUrlUsing(): \Closure
//    {
//        return fn (Post $record): string => route('filament.resources.posts.edit', ['record' => $record]);
//    }



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')->required(),
                Select::make('category_id')->options(Category::all()->pluck('title', 'id'))->required(),
                Select::make('age_id')->options(Age::all()->pluck('title', 'id'))->required(),
                FileUpload::make('thumbnail'),
                TextInput::make('excerpt')->required(),
                Grid::make([
                    'default' => 1,
                ])
                    ->schema([
                        RichEditor::make('lb_content')->required(),
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                //
            ]);
    }
}

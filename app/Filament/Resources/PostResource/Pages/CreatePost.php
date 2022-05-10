<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Tables\Filters\Layout;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

}

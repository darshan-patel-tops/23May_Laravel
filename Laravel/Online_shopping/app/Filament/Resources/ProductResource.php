<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([

                    TextInput::make('name'),
                    TextInput::make('price'),
                    FileUpload::make('image')->image(),
                    TagsInput::make('tags'),
                    Repeater::make('description')->schema([
                            Select::make('options')->options([
                                'top'=>"TOP",
                                'bottom'=>"BOTTOM"
                            ]),
                        // RichEditor::make('description'),
                        TinyEditor::make('description'),
                    ]),
                    Repeater::make('point')->schema([

                        // TextInput::make('point'),
                        TinyEditor::make('point'),
                    ]),
                    ])
            ]);
    }
    // [{"options":"top","description":"<p>12346854<\/p>"},{"options":"bottom","description":"<p>12385<\/p>"}]
    // [{"description":"<p>this is 1 desc<\/p>"},{"description":"<p>this is 2 desc<\/p>"}]
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name'),
                TextColumn::make('price'),
                TextColumn::make('tags'),
                ImageColumn::make('image'),
                ToggleColumn::make('visible')
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}

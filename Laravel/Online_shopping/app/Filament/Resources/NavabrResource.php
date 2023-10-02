<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NavabrResource\Pages;
use App\Filament\Resources\NavabrResource\RelationManagers;
use App\Models\Navabr;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NavabrResource extends Resource
{
    protected static ?string $model = Navabr::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Card::make()->schema([

                    TextInput::make('navbar')->required(),
                    TextInput::make('url')->required(),
                    Repeater::make('sub_navbar')->schema([

                        TextInput::make('sub_navbar'),
                        TextInput::make('sub_navbar_url'),


                        ])
            ])
            ]);
    }
    // [{"sub_navbar":"dairy items","sub_navbar_url":"dairy items"},{"sub_navbar":"clothes","sub_navbar_url":"clothes"}]
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('navbar'),
                TextColumn::make('url'),
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
            'index' => Pages\ListNavabrs::route('/'),
            'create' => Pages\CreateNavabr::route('/create'),
            'edit' => Pages\EditNavabr::route('/{record}/edit'),
        ];
    }
}

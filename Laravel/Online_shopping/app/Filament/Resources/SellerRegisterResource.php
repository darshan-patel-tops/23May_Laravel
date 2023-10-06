<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SellerRegisterResource\Pages;
use App\Filament\Resources\SellerRegisterResource\RelationManagers;
use App\Models\SellerRegister;
use Filament\Forms;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class SellerRegisterResource extends Resource
{
    protected static ?string $model = SellerRegister::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()->schema([



                    TextInput::make('basic_details.first_name'),
                    TextInput::make('basic_details.last_name'),
                    TextInput::make('basic_details.dob'),
                    TextInput::make('basic_details.address'),
                    TextInput::make('basic_details.contact'),

                    FileUpload::make('documents.aadhar')->image(),
                    FileUpload::make('documents.pan'),
                    FileUpload::make('documents.birth_certificate'),
                    FileUpload::make('documents.pass_book'),
                    FileUpload::make('documents.gst_certificate'),

                    // Repeater::make('basic_details')->schema([
                        //    TextInput::make('name'),
                        // Select::make('basic_details')->options([
                        //         'first_name'=>"First Name",
                        //         'last_name'=>"Last Name",
                        //         'dob'=>"DOB",
                        //         'address'=>"Address",
                        //         'gstin'=>"GSTIN",
                        //         'contact'=>"Contact",
                        // ]),
                        // TextInput::make('value')
                    // ])


                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListSellerRegisters::route('/'),
            'create' => Pages\CreateSellerRegister::route('/create'),
            'edit' => Pages\EditSellerRegister::route('/{record}/edit'),
        ];
    }
}

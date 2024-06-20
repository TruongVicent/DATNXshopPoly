<?php

namespace App\Filament\App\Resources;

use App\Filament\App\Resources\UserResource\Pages;
use App\Filament\App\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use App\Enums\UserRole;
use App\Models\District;
use App\Models\Province;
use App\Models\Ward;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;


class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Thông tin người dùng';

    protected static ?string $label = 'Người dùng';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                FileUpload::make('avatar')
                    ->columnSpan(2)
                    ->label('Ảnh đại diện'),
                TextInput::make('name')
                    ->required()
                    ->label('Tên tài khoản'),
                TextInput::make('email')
                    ->required()
                    ->regex('/^.+@.+$/i')
                    ->email()
                    ->unique(ignoreRecord: true)
                    ->validationMessages([
                        'unique' => 'Tài khoản đã được đăng kí.',
                    ]),
                TextInput::make('password')
                    ->required()
                    ->label('Mật khẩu')
                    ->dehydrateStateUsing(fn($state) => Hash::make($state))
                    ->minLength(6)
                    ->maxLength(16)
                    ->password()
                    ->filled()
                    ->unique(ignoreRecord: true)
                    ->autocomplete('new-password'),
                TextInput::make('phone')
                    ->label('SĐT')
                    ->required()
                    ->tel(),
                DatePicker::make('birthday')
                    ->required()
                    ->label('Ngày sinh'),

                Select::make('gender')
                    ->options(UserRole::class)
                    ->label('Giới tính')
                    ->required(),

                Select::make('shop_id')
                    ->relationship(name: 'shop', titleAttribute: 'name')
                    ->required()
                    ->label('Cửa hàng'),

                TextInput::make('verification_code')
                    ->hidden()
                    ->label('Mã xác thực tài khoản'),

                Fieldset::make('Địa chỉ')
                    ->schema([
                        Select::make('province_id')
                            ->label('Thành phố/Tỉnh')
                            ->required()
                            ->reactive()
                            ->options(Province::query()
                                ->pluck('name', 'id'))
                            ->live(),
                        Select::make('district_id')
                            ->required()
                            ->reactive()
                            ->label('Quận/Huyện')
                            ->options(fn(Get $get): Collection => District::query()
                                ->where('province_id', $get('province_id'))
                                ->pluck('name', 'id'))
                            ->live(),
                        Select::make('ward_id')
                            ->required()
                            ->reactive()
                            ->label('Phường/Xã')
                            ->options(fn(Get $get): Collection => Ward::query()
                                ->where('district_id', $get('district_id'))
                                ->pluck('name', 'id'))
                            ->nullable()
                            ->live(),
                    ])
                    ->columns(3),
                Select::make('roles')
                    ->relationship('roles', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable()

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('avatar')
                    ->circular(),
                TextColumn::make('name')
                    ->label('Tên tài khoản')
                    ->searchable(),
                TextColumn::make('email')
                    ->icon('heroicon-m-envelope')
                    ->label('Email'),
                TextColumn::make('roles.name')
                    ->badge()
                    ->label('Vai trò')
                    ->separator(','),
                TextColumn::make('phone')
                    ->label('SĐT')
                    ->searchable(),
                TextColumn::make('gender')
                    ->label('Giới tính'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'view' => Pages\ViewUser::route('/{record}'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}

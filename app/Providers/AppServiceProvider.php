<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\NavigationGroup;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
        Filament::serving(function () {
            Filament::registerNavigationGroups([
                NavigationGroup::make()
                     ->label('SIM')
                     ->icon('heroicon-s-shopping-cart'),

                NavigationGroup::make()
                    ->label('Users')
                    ->icon('heroicon-s-cog')
                    ->collapsed(),
            ]);
        });
    }
}

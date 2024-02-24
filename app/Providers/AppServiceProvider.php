<?php

namespace App\Providers;

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
        // Place your function here
        \Illuminate\Support\Facades\View::share('countryNameToCode', function($countryName) {
            $countries = [
                'United States' => 'US',
                'Germany' => 'DE',
                'United Kingdom' => 'GB',
                'France' => 'FR',
                'Italy' => 'IT',
                'Spain' => 'ES',
                'Canada' => 'CA',
                'China' => 'CN',
                'Japan' => 'JP',
                'South Korea' => 'KR',
                'Brazil' => 'BR',
                'India' => 'IN',
                'Russia' => 'RU',
                'Australia' => 'AU',
                'Mexico' => 'MX',
                'Indonesia' => 'ID',
                'Netherlands' => 'NL',
                'Turkey' => 'TR',
                'Saudi Arabia' => 'SA',
                'Switzerland' => 'CH',
                'Argentina' => 'AR',
                'Sweden' => 'SE',
                'Nigeria' => 'NG',
                'Poland' => 'PL',
                'Norway' => 'NO',
                'South Africa' => 'ZA',
                'Finland' => 'FI',
                'Denmark' => 'DK',
                'New Zealand' => 'NZ',
                'Belgium' => 'BE',
                'Portugal' => 'PT',
                'Ireland' => 'IE',
                'Austria' => 'AT',
                'Malaysia' => 'MY',
                'Singapore' => 'SG',
                'Israel' => 'IL',
                'United Arab Emirates' => 'AE',
            ];

            return $countries[$countryName] ?? null;
        });
    }
}

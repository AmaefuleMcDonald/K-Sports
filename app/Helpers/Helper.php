<?php

if (!function_exists('countryNameToCode')) {
    function countryNameToCode($countryName) {
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
            'England' => 'GB',
            'Egypt' => 'EG',
            
        ];

        return $countries[$countryName] ?? null;
    }
}

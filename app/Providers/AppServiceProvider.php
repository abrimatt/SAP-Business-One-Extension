<?php

namespace App\Providers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Http::macro('client', function () {
            return Http::withHeaders([
                'Accept' => 'application/json',
                'Accept' => 'application/json;odata=minimalmetadata;charset=utf-8',
                'Accept' => 'application/x-www-form-urlencoded'
            ])->withOptions([
                'verify' => false,
                // 'cookies' => true,
            ])->baseUrl('https://r3pc0010:50000/b1s/v2/');
        });

        // Http::macro('client', function () {
        //     return Http::withHeaders([
        //         'Accept' => 'application/json',
        //         'Accept' => 'application/json;odata=minimalmetadata;charset=utf-8',
        //         'Accept' => 'application/x-www-form-urlencoded'
        //     ])->withOptions([
        //         'verify' => false,
        //         // 'cookies' => true,
        //     ])->baseUrl('https://sap.westgate.ng:50000/b1s/v2/');
        // });
    }
}

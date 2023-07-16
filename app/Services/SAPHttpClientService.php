<?php

namespace App\Services;

use GuzzleHttp\Client;
use GuzzleHttp\Cookie\CookieJar;
use GuzzleHttp\Cookie\SetCookie;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Psr\Http\Message\ResponseInterface;

/**
 * Class SAPAuthLayerService.
 */
class SAPHttpClientService
{
    public function __construct() { }

    public function auth() {

        $response = Http::client()->post('Login', [
            'CompanyDB' => 'SBODemoGB',
            'UserName' => 'sapmanager',
            'Password' => 'Sap@2023'
        ]);

        // $response = Http::client()->post('Login', [
        //     'CompanyDB' => 'Westgate',
        //     'UserName' => 'manager',
        //     'Password' => 'Admin@2021'
        // ]);

        Cache::put('sessionId', $response->json()['SessionId']);
       
        return $response;
    }

    public function logout() 
    {
        $response = Http::client()->post('Logout');

        if ($response) {
            Cache::forget('sessionId');
        }

        return $response;
    }

    public function get(string $uri)
    {
        $sapsession = Cache::get('sessionId');
        return Http::client()->withHeaders(['Cookie' => 'B1SESSION='. $sapsession .';ROUTEID=.node1'])->get($uri);
    }

    public function post(string $uri, array $options = [])
    {
        $sapsession = Cache::get('sessionId');
        return Http::client()->withHeader('Cookie', 'B1SESSION='. $sapsession .'; ROUTEID=.node1')
                        ->post($uri, $options);
    }

    public function delete(string $uri, array $options = [])
    {
        $sapsession = Cache::get('sessionId');
        return Http::client()->withHeader('Cookie', 'B1SESSION='. $sapsession .'; ROUTEID=.node1')->delete($uri, $options);
    }
}

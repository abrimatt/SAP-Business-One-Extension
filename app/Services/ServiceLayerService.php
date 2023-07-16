<?php
namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Psr\Http\Message\ResponseInterface;

class ServiceLayerService {

    public function __construct()
    {
        // $this->client = $http->withHeaders([
        //         'Accept' => 'application/json',
        //         'Accept' => 'application/json;odata=minimalmetadata;charset=utf-8',
        //         'Accept' => 'application/x-www-form-urlencoded'
        //     ])->withOptions([
        //         'verify' => false,
        //         // 'cookies' => true,
        //     ])->baseUrl('https://r3pc0010:50000/b1s/v2/');
    }

    public function auth()
    {
        $response = Http::client()->post('Login', [
            'CompanyDB' => 'SBODemoGB',
            'UserName' => 'sapmanager',
            'Password' => 'Sap@2023'
        ]);

        Cache::put('sessionId', $response->json()['SessionId']);

        return $response;
    }

    public function get(string $uri)
    {
        $sapsession = Cache::get('sessionId');
        return Http::client()->withHeader('Cookie', 'B1SESSION='. $sapsession .';ROUTEID=.node1')->get($uri);
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

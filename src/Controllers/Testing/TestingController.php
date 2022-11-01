<?php
namespace Wainwright\CasinoDog\Controllers\Testing;
use Illuminate\Contracts\Support\Arrayable;
use JsonSerializable;
use Wainwright\CasinoDog\Controllers\Game\GameKernel;
use Wainwright\CasinoDog\Controllers\Game\GameKernelTrait;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use DB;
use Wainwright\CasinoDog\CasinoDog;
use Wainwright\CasinoDog\Facades\ProxyHelperFacade;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Cache;

class TestingController
{
    public function __construct() {
        if(env('APP_DEBUG') !== true) {
            abort(403, 'Only available in APP_DEBUG=true');
        }
        if(config('casino-dog.testing') === false) {
            abort(403, 'Testing disabled in config.');
        }


    }
    public function handle($function = NULL, Request $request) {
        return $this->$function($request);
    }
    use GameKernelTrait;

    public static function nl(Request $request) {
        $new = new GameKernel;
        $url = 'eyJpdiI6IlZUZ25vdHNrbVVtZGo4aW5JS0M1Rnc9PSIsInZhbHVlIjoiRjd0eXV1bmhPVGlHVkVTM1pZUVRzZmhzMTFMSFNINWlGdFJkN2M5dzMrdForTlFySUlLdTB4VTQrOU5xQ2duME5YK1N6UlZsSlREYndFbXQxMk5JTkRSZHRWRHgyenNBUStSUU1GdEIwa1hSelVlYUYrY1NyWWQ1NUlNYjlHOHdzcDhPbGNSVzVBb0w0S2swajFmc2RqMEtnekpIcUhJM3ZzYjA4SDNTQW1hWkF0R2pOMjFjcGpYSm5IZ25xNnhEVzI4MXFlMWNPYU9PVGhDQWlQQnA5VWRKUHhPY0lxWForRjcxUGtianJXelVsMU5ZaTArbDQzakJhcGlpbHIzL2h1WVQzWVN1dmhmcFk4S2tUakd6VCtKVkJGZW52QnlLc0JEcDVBc0MxTlV3NWVuNmlQNXF3elJreEswem9VVVpqSWdBbWptbUZVMktPZ1NGTmlqbnJtRjJFT09na1RUUkN6cWhieFNIcTNzR05rZGwxWDI0a0F2MXQ0eU5nTS9PUWUvelVMUTdhaDQxZHFhMEdURzcvUT09IiwibWFjIjoiZmNiN2I5MjNmNWZmZDVlYzNhZGI1MzNjMDgyYzY4OGQ5ZTQ0NTI4ZjgxMDYzNDU2ZDg4NGVmMmU1ZGI5ZTk4NyIsInRhZyI6IiJ9';
        $url = $new->decrypt_string($url);
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        
        $headers = array(
           "authority: rarenew-dk4.pragmaticplay.net",
           "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9",
           "accept-language: en-ZA,en;q=0.9",
           "cache-control: no-cache",
           "pragma: no-cache",
           "upgrade-insecure-requests: 1",
           "user-agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.5112.101 Mobile Safari/537.36",
        );
        curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        
        $resp = curl_exec($curl);
        curl_close($curl);
        $get = Http::get($url);
        $get = str_replace('https://rarenew-dk4', 'https://wainwrighted.herokuapp.com/https://rarenew-dk4', $get);
        $get = str_replace('gameService":"', 'gameService":"https://02-gameserver.777.dog/api/games/pragmaticplay/97890f4f-c2d6-441e-8c72-55a316897417/gs2c/v3/', $get);

        
        return $get;

    }

    public function nova()
    {
        Cache::put('nova_valid_license_key', 1);

    }
    public function hello(Request $request)
    {
        if(!$request->url) {
            return 'Enter URL in query params ?url=';
        }
        try {
        $url = explode('url=', $_SERVER['REQUEST_URI'])[1];
        } catch(\Exception $e) {
            return $e->getMessage();
        }
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            $data = [
                'url' => $url,
            ];
        } else {
            return 'Enter a VALID url in query param ?url=';
        }
        return view('wainwright::example.test')->with('data', $data);
    }

    public function post_encoded(Request $request)
    {
        //base64_decode($request->username);
        try {
        $referer = $request->header('referer');
        $path = explode('?', $referer)[2];
        } catch(\Exception $e) {
            $path = 'noextraparamsfound=1';
        }
        return env('APP_URL').'/testing/basetest?dom='.$request->username.'&'.$path;
    }


    public function basetest()
    {
        return view('wainwright::example.base')->with('base', 'https://777.dog');
    }


    

    public function viewer()
    {
        return Http::patch('https://rarenew-dk4.pragmaticplay.net/ReplayService');

    }
    
    public static function send(Request $request) {
//return \Wainwright\CasinoDog\Events\TestBroadcast::dispatch('5000');
        $url = "https://api-prod.infingame.com/ps-launch/softswiss/bets/prod?gameName=pls_luxor_gold_hold_and_win&key=TEST1000&country=RUS&demo=true&shell=request&language=en&segment=desktop";

        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        //for debug only!
        curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);

        $resp = curl_exec($curl);
        curl_close($curl);
        echo "<iframe src='$url'></iframe>";
        return $resp;
}


    protected function replaceInFile($search, $replace, $path)
    {
        file_put_contents($path, str_replace($search, $replace, file_get_contents($path)));
    }

    public function test_get_config(Request $request)
    {
        $game_controller = config('casino-dog.games');

        if (file_exists(config_path('../.wainwright/casino-dog/config/casino-dog.php'))) {
            $this->replaceInFile($game_controller, $game_controller.$game_controller, config_path('casino-dog.php'));
        }

        return config_path('casino-dog.games');
    }


}

<?php

namespace App\Http\Controllers;

use App\Services\GeoLocationService;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\App;

class WebController extends Controller
{
    protected $geoLocationService;

    public function __construct(GeoLocationService $geoLocationService)
    {
        $this->geoLocationService = $geoLocationService;
    }

    public function home(Request $request){

      /*  if($request->session()->exists('lang')){
            $lang = $request->session()->get('lang');
            return redirect("/$lang/about_me");
        }*/
        /* brazil 177.192.255.38
         * argentina 190.120.245.56
         * alemania
         */
/*        $ip = $request->ip();
        $location = $this->geoLocationService->getGeoLocation($ip);
        $countryCode = $location['countryCode']??"";
        $language = $this->getLanguageByCountryCode($countryCode)??"en";
        $request->session()->put('lang', $language);
        return redirect("/$language/about_me");*/
    }

    public function index(Request $request)
    {
        $ip = $request->ip();
        if(!$request->session()->exists($ip)){
            $request->session()->put('ip', $ip);
        }

        $route = $request->getRequestUri();
        $array = explode('/',$route);

        if($request->session()->exists('lang')) {
            $language = $request->session()->get('lang');
        }else{
            $ip = $request->ip();
            $location = $this->geoLocationService->getGeoLocation($ip);
            $countryCode = $location['countryCode']??"";
            $language = $this->getLanguageByCountryCode($countryCode)??"en";
            $request->session()->put('lang', $language);
        }

        $section = $array[2]??"about_me";
        App::setLocale($language);
        $content = config('web_content')[$section]??[];
        return view("custom/pages/$section", compact('content','section','language'));
    }

    public function language(Request $request,$lang)
    {
        $request->session()->put('lang', $lang);
        App::setLocale($lang);

        return redirect(langUrl("about_me"));
    }


    private function getLanguageByCountryCode($countryCode): string {
        $languages = [
            'US' => 'en',
            'GB' => 'en',
            'CA' => 'en',
            'AU' => 'en',
            'NZ' => 'en',
            'IE' => 'en',
            'ES' => 'es',
            'MX' => 'es',
            'AR' => 'es',
            'CO' => 'es',
            'PE' => 'es',
            'VE' => 'es',
            'CL' => 'es',
            'EC' => 'es',
            'BO' => 'es',
            'PY' => 'es',
            'UY' => 'es',
            'PA' => 'es',
            'de' => 'de',
            'AT' => 'de',
            'CH' => 'de',
            'BE' => 'fr',
            'FR' => 'fr',
            'LU' => 'fr',
            'PT' => 'pt',
            'BR' => 'pt',
            'AO' => 'pt',
            'MZ' => 'pt',
            'GW' => 'pt',
            'ST' => 'pt',
            'CV' => 'pt',
            'TL' => 'pt',
        ];

        return $languages[$countryCode] ?? 'en';
    }

    private function validSection(): array {
        return [
          'about_me' => 'about_me',
          'client_clicap' => 'clients',
          'client_geoplexo' => 'clients',
          'clients' => 'clients',
          'education' => 'education',
          'experience' => 'experience',
          'projects' => 'projects',
        ];
    }

    private function menuSelected(string $section){

    }


}

?>

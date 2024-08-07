<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use \Illuminate\Support\Facades\App;

class WebController extends Controller
{
    public function index(Request $request)
    {
        $route = $request->getRequestUri();
        $array = explode('/',$route);
        $languaje = $array[1]??"en";
        $section = $array[2]??"about-me";
        App::setLocale($languaje);
        $content = config('web_content')[$section]??[];
        return view("custom/pages/$section", compact('content'));
    }

    public function 
}

?>

<?php

namespace App\Http\Controllers\FrontEnd;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\Faq;
use App\Models\Service;
use App\Models\Settings;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $setting = Settings::first();
        $services = Service::all();
        $clients = Client::all();
        return view('frontend.home1', compact('setting', 'services', 'clients'));
    }
}

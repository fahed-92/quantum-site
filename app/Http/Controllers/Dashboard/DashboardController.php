<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\RequestService;
use App\Models\Service;
use App\Models\UserActivity;
use App\Notifications\ReporterNotifications;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {


        $services = Service::count();
        $clients = Client::count();
        return view('dashboard.home', compact('services' , 'clients'));
    }
}

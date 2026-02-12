<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->latest()->get();

        return view('service.index', ['services' => $services]);
    }

    public function show(string $slug)
    {
        $service = Service::where('slug', $slug)->with('features')->firstOrFail();
        $allServices = Service::where('is_active', true)->latest()->take(5)->get();

        return view('service.show', [
            'service' => $service,
            'allServices' => $allServices
        ]);
    }
}

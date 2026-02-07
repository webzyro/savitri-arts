<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::where('is_active', true)->latest()->get();

        if ($services->isEmpty()) {
            return redirect()->back()->with('error', 'No Service Available');
        }

        return view('service.index', ['services' => $services]);
    }

    public function show(string $slug)
    {
        $service = Service::where('slug', $slug)->firstOrFail();

        if (!$service) {
            return redirect()->back()->with('error', 'Service Not Found');
        }

        return view('service.show', ['service' => $service]);
    }
}

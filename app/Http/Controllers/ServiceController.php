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
        $service = Service::where('slug', $slug)->firstOrFail();

        return view('service.show', ['service' => $service]);
    }
}

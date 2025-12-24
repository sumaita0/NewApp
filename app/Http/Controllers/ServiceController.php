<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class ServiceController extends Controller
{
    public function landing()
    {
        $services = Service::where('is_active', true)->get();
        return view('services', compact('services'));
    }

    public function index(Request $request)
    {
        $query = $request->query('query');

        $services = Service::where('is_active', true)
            ->when($query, fn($q) =>
                $q->where('title', 'like', "%{$query}%")
            )
            ->get();

        return view('services', compact('services', 'query'));
    }

    public function show($slug)
{
    $service = Service::where('slug', $slug)->firstOrFail();

    $subservices = $service->subservices()->orderBy('id')->get();

    return view('services.show', compact('service', 'subservices'));
}


    public function search(Request $request)
    {
        $query = $request->query('query');
        $services = Service::where('title', 'like', "%{$query}%")->get();
        return view('services', compact('services', 'query'));
    }


}

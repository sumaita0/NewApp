<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\User;
use App\Models\Sub_Service;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    // Dashboard
    public function index()
    {
        $totalUsers = User::count();
        $totalServices = Service::count();
        $totalSubServices = Sub_Service::count();

        return view('admin.dashboard', compact('totalUsers', 'totalServices', 'totalSubServices'));
    }

    // List all services
    public function viewService()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }

    // Show Add Service Form
    public function storeServiceForm()
    {
        return view('services.create');
    }

    // Store new service
    public function storeService(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpg,png,svg|max:2048',
            'is_active' => 'nullable|boolean'
        ]);

        $service = new Service();
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->is_active = $request->is_active ?? 1;

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $service->icon = $filename;
        }

        $service->save();

        return redirect()->route('services.index')->with('success', 'Service added successfully!');
    }

    // Delete service
    public function deleteService($id)
    {
        $service = Service::find($id);
        if ($service) {
            $service->delete();
            return back()->with('success', 'Service deleted successfully!');
        }
        return back()->with('error', 'Service not found!');
    }

    public function show($slug)
        {
            $service = Service::where('slug', $slug)
                ->with(['subservices' => function ($query) {
                    $query->where('is_active', 1)->orderBy('id');
                }])
                ->firstOrFail();

            return view('service1', compact('service'));
        }

    // List all sub-services
    public function viewSubService()
    {
        $services = Service::all();
        $subServices = Sub_Service::all();
        return view('subservices.index', compact('services', 'subServices'));
    }

    // Show single sub-service
        public function showSubService($id)
        {
            $subService = Sub_Service::with('service')->findOrFail($id);

            return view('subservices.show', compact('subService'));
        }

    // Show Add Sub-Service Form
    public function storeSubServiceForm()
    {
        $services = Service::all();
        return view('subservices.create', compact('services'));
    }

    // Store new sub-service
    public function storeSubService(Request $request)
    {
        $request->validate([
            'service_id' => 'required|exists:services,id',
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|image|mimes:jpg,png,svg|max:2048',
            'price' => 'nullable|numeric',
            'discount_price' => 'nullable|numeric',
            'quantity' => 'nullable|integer',
            'is_active' => 'nullable|boolean'
        ]);

        $subService = new Sub_Service();
        $subService->service_id = $request->service_id;
        $subService->title = $request->title;
        $subService->description = $request->description;
        $subService->price = $request->price;
        $subService->discount_price = $request->discount_price;
        $subService->quantity = $request->quantity ?? 0;
        $subService->is_active = $request->is_active ?? 1;

        if ($request->hasFile('icon')) {
            $file = $request->file('icon');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $subService->icon = $filename;
        }

        $subService->save();

        return redirect()->route('subservices.index')->with('success', 'Sub-Service added successfully!');
    }

    // Delete sub-service
    public function deleteSubService($id)
    {
        $subService = Sub_Service::find($id);
        if ($subService) {
            $subService->delete();
            return back()->with('success', 'Sub-Service deleted successfully!');
        }
        return back()->with('error', 'Sub-Service not found!');
    }
}

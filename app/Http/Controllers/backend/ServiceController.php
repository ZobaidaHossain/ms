<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\GoalRequest;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\SliderRequest;
use App\Models\Service;
use App\Services\ServiceService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class ServiceController extends Controller
{
    use SystemTrait;
    protected $serviceService;

    public function __construct(ServiceService $serviceService)
    {
        $this->serviceService = $serviceService;
    }
    public function index()
    {
        try {
            if (Gate::allows('service.index')) {
                $data['service'] = $this->serviceService->all();
                return view('admin.service.index', $data);
            } else {
                return response()->json(['status' => 403, 'message' => 'Access Denied 403']);
            }
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Technical error!',
                'error' => $e->getMessage(),
            ]);
        }
    }


    public function create()
    {
        try {
            if (Gate::allows('service.index')) {
                return view('admin.service.form');
            }
            return view('errors.403');
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Technical error!',
                'error' => $e->getMessage(),
            ]);
        }
    }
    public function store(ServiceRequest $request)
    {
        try {
            if (Gate::allows('service.create')) {
                $data = $request->validated();

                Service::create($data);
                return redirect()->route('admin.service.index')->with('success', 'Service created successfully.');
            } else {
                return response()->json(['status' => 403, 'message' => 'Access Denied 403']);
            }
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Technical error!',
                'error' => $e->getMessage(),
            ]);
        }
    }



    public function edit($id)
    {
        try {
            if (Gate::allows('service.index')) {
                $service = $this->serviceService->find($id);
                if (!$service) {
                    abort(404, 'service not found');
                }
                return view('admin.service.form', compact('service'));
            }
            return view('errors.403');
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Technical error!',
                'error' => $e->getMessage(),
            ]);
        }
    }
    public function update(ServiceRequest $serviceRequest, $id)
    {
        try {
            if (Gate::allows('dashboard.index')) {
                $validatedData = $serviceRequest->validated();

                $success = $this->serviceService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'Service not found');
                }
                return redirect()->route('admin.service.index')->with('success', 'service updated successfully.');
            }
            return view('errors.403');
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Technical error!',
                'error' => $e->getMessage(),
            ]);
        }
    }


    public function destroy($id)
    {

        try {
            if (Gate::allows('service.index')) {
                $success = $this->serviceService->delete($id);
                if (!$success) {
                    abort(404, 'service not found');
                }
                return redirect()->route('admin.service.index')->with('error', 'service deleted successfully.');
            }
            return view('errors.403');
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Technical error!',
                'error' => $e->getMessage(),
            ]);
        }
    }
}

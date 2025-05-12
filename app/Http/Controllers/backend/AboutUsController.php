<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsRequest;
use App\Http\Requests\SliderRequest;
use App\Models\AboutUs;
use App\Models\Slider;
use App\Services\AboutUsService;
use App\Services\SliderService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class AboutUsController extends Controller
{
    use SystemTrait;
    protected $aboutUsService;

    public function __construct(AboutUsService $aboutUsService)
    {
        $this->aboutUsService = $aboutUsService;
    }
    public function index()
    {
        try {
            if (Gate::allows('about-us.index')) {
                $data['aboutus'] = $this->aboutUsService->all();
                return view('admin.about-us.index', $data);
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
            if (Gate::allows('dashboard.index')) {
                // Fetch active clients using ClientService
                return view('admin.about-us.form');
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
    public function store(AboutUsRequest $request)
    {
        try {
            if (Gate::allows('about-us.create')) {
                $data = $request->validated();

                AboutUs::create($data);
                $data['aboutus'] = AboutUs::get();

                return view('admin.about-us.index', $data);
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
            if (Gate::allows('dashboard.index')) {
                $aboutUs = $this->aboutUsService->find($id);
                if (!$aboutUs) {
                    abort(404, 'Slider not found');
                }
                return view('admin.about-us.form', compact('aboutUs'));
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
    public function update(AboutUsRequest $aboutUsRequest, $id)
    {
        try {
            if (Gate::allows('dashboard.index')) {
                $validatedData = $aboutUsRequest->validated();

                $success = $this->aboutUsService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'About us not found');
                }
                return redirect()->route('admin.about-us.index')->with('success', 'About Us updated successfully.');
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
            if (Gate::allows('dashboard.index')) {
                $success = $this->aboutUsService->delete($id);
                if (!$success) {
                    abort(404, 'About us not found');
                }
                return redirect()->route('admin.about-us.index')->with('success', 'About Us deleted successfully.');
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

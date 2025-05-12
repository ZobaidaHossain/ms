<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsRequest;
use App\Http\Requests\BackgroundRequest;
use App\Http\Requests\SliderRequest;
use App\Models\AboutUs;
use App\Models\Background;
use App\Models\Slider;
use App\Services\AboutUsService;
use App\Services\BackgroundService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class BackgroundController extends Controller
{
    use SystemTrait;
    protected $backgroundService;

    public function __construct(BackgroundService $backgroundService)
    {
        $this->backgroundService = $backgroundService;
    }
    public function index()
    {
        try {
            if (Gate::allows('background.index')) {
                $data['background'] = $this->backgroundService->all();
                return view('admin.background.index', $data);
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
            if (Gate::allows('background.index')) {
                // Fetch active clients using ClientService
                return view('admin.background.form');
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
    public function store(BackgroundRequest $request)
    {
        try {
            if (Gate::allows('background.create')) {
                $data = $request->validated();

                Background::create($data);
                // $data['background'] = Background::get();
                // return view('admin.background.index', $data);
                return redirect()->route('admin.background.index')->with('success', 'Background created successfully.');
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
            if (Gate::allows('background.index')) {
                $background = $this->backgroundService->find($id);
                if (!$background) {
                    abort(404, 'Background not found');
                }
                return view('admin.background.form', compact('background'));
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
    public function update(BackgroundRequest $backgroundRequest, $id)
    {
        try {
            if (Gate::allows('background.index')) {
                $validatedData = $backgroundRequest->validated();

                $success = $this->backgroundService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'Background not found');
                }
                return redirect()->route('admin.background.index')->with('success', 'Background updated successfully.');
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
            if (Gate::allows('background.index')) {
                $success = $this->backgroundService->delete($id);
                if (!$success) {
                    abort(404, 'Background not found');
                }
                return redirect()->route('admin.background.index')->with('error', 'Background deleted successfully.');
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

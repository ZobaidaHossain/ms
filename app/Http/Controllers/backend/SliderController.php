<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use App\Services\SliderService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class SliderController extends Controller
{
    use SystemTrait;
    protected $sliderService;

    public function __construct(SliderService $sliderService)
    {
        $this->sliderService = $sliderService;
    }
    public function index()
    {
        try {
            if (Gate::allows('slider.index')) {
                $data['sliders'] = $this->sliderService->all();

                return view('admin.slider.index', $data);
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
                return view('admin.slider.form');
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


    public function store(SliderRequest $request)
    {
        try {
            if (Gate::allows('slider.create')) {
                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->image, 'slider');
                }
                Slider::create($data);
                return redirect()->route('admin.slider.index')->with('success', 'Slider created successfully.');
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
                $slider = $this->sliderService->find($id);
                if (!$slider) {
                    abort(404, 'Slider not found');
                }
                return view('admin.slider.form', compact('slider'));
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
    public function update(SliderRequest $sliderRequest, $id)
    {
        try {
            if (Gate::allows('dashboard.index')) {
                $validatedData = $sliderRequest->validated();
                $slider = Slider::findOrFail($id);

                if ($sliderRequest->hasFile('image')) {
                    if ($slider->image && Storage::disk('public')->exists($slider->image)) {
                        Storage::disk('public')->delete($slider->image);
                    }
                    $validatedData['image'] = $this->imageUpload($sliderRequest->image, 'slider');
                }
                $success = $this->sliderService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'Slider not found');
                }
                return redirect()->route('admin.slider.index')->with('success', 'Slider updated successfully.');
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
                $slider = $this->sliderService->find($id);
                if ($slider->image && Storage::disk('public')->exists($slider->image)) {
                    Storage::disk('public')->delete($slider->image);
                }
                $success = $this->sliderService->delete($id);
                if (!$success) {
                    abort(404, 'Slider not found');
                }
                return redirect()->route('admin.slider.index')->with('error', 'Slider deleted successfully.');
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

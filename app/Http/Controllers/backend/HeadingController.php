<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Services\HeadingService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\HeadingRequest;
use App\Models\Heading;
use Illuminate\Support\Facades\Storage;

class HeadingController extends Controller
{
    use SystemTrait;
    protected $headingService;
    public function __construct(HeadingService $headingService)
    {
        $this->headingService = $headingService;
    }
    public function index()
    {
        try {
            if (Gate::allows('heading.index')) {
                $data['heading'] = $this->headingService->all();

                return view('admin.heading.index', $data);
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
            if (Gate::allows('heading.index')) {
                return view('admin.heading.form');
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
    public function store(HeadingRequest $request)
    {
        try {
            if (Gate::allows('heading.create')) {
                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->image, 'heading');
                }
                Heading::create($data);
                return redirect()->route('admin.heading.index')->with('success', 'Heading created successfully.');
            } else {
                return response()->json(['status' => 403, 'message' => 'Access Denied']);
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
            if (Gate::allows('heading.index')) {
                $heading = $this->headingService->find($id);
                if (!$heading) {
                    abort(404, 'heading not found');
                }
                return view('admin.heading.form', compact('heading'));
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
    public function update(HeadingRequest $request, $id)
    {
        try {
            if (Gate::allows('heading.index')) {
                $validatedData = $request->validated();
                $heading = Heading::findOrFail($id);
                if ($request->hasFile('image')) {

                    if ($heading->image && Storage::disk('public')->exists($heading->image)) {
                        Storage::disk('public')->delete($heading->image);
                    }
                    $validatedData['image'] = $this->imageUpload($request->image, 'heading');
                }
                $success = $this->headingService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'heading not found');
                }
                return redirect()->route('admin.heading.index')->with('success', 'Heading updated successfully.');
            } else {
                return response()->json(['status' => 403, 'message' => 'Access Denied']);
            }
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
            if (Gate::allows('heading.index')) {
                $heading = $this->headingService->find($id);
                if ($heading->image && Storage::disk('public')->exists($heading->image)) {
                    Storage::disk('public')->delete($heading->image);
                }
                $success = $this->headingService->delete($id);
                if (!$success) {
                    abort(404, 'heading not found');
                }
                return redirect()->route('admin.heading.index')->with('error', 'heading deleted successfully.');
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

<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\FounderRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\GalleryRequest;
use App\Services\FounderService;
use App\Models\Founder;
use App\Models\Gallery;
use App\Services\GalleryService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    use SystemTrait;
    protected $galleryService;
    public function __construct(GalleryService $galleryService)
    {
        $this->galleryService = $galleryService;
    }

    public function index()
    {
        try {
            if (Gate::allows('gallery.index')) {
                $data['gallery'] = $this->galleryService->all();
                return view('admin.gallery.index', $data);
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
            if (Gate::allows('gallery.index')) {
                return view('admin.gallery.form');
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
    public function store(GalleryRequest $request)
    {
        try {
            if (Gate::allows('gallery.create')) {
                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->image, 'gallery');
                }
                Gallery::create($data);
                return redirect()->route('admin.gallery.index')->with('success', 'Gallery created successfully.');
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
            if (Gate::allows('gallery.index')) {
                $gallery = $this->galleryService->find($id);
                if (!$gallery) {
                    abort(404, 'gallery not found');
                }
                return view('admin.gallery.form', compact('gallery'));
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
    public function update(GalleryRequest $galleryRequest, $id)
    {
        try {
            if (Gate::allows('gallery.edit')) {
                $validatedData = $galleryRequest->validated();
                $gallery = Gallery::findOrFail($id);
                if ($galleryRequest->hasFile('image')) {

                    if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                        Storage::disk('public')->delete($gallery->image);
                    }
                    $validatedData['image'] = $this->imageUpload($galleryRequest->image, 'gallery');
                }
                $success = $this->galleryService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'gallery not found');
                }
                return redirect()->route('admin.gallery.index')->with('success', 'gallery updated successfully.');
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
            if (Gate::allows('gallery.index')) {
                $gallery = $this->galleryService->find($id);
                if ($gallery->image && Storage::disk('public')->exists($gallery->image)) {
                    Storage::disk('public')->delete($gallery->image);
                }
                $success = $this->galleryService->delete($id);
                if (!$success) {
                    abort(404, 'gallery not found');
                }
                return redirect()->route('admin.gallery.index')->with('error', 'gallery deleted successfully.');
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

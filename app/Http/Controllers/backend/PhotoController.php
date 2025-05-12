<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Photo;
use App\Models\Organization;
use App\Http\Requests\PhotoRequest;
use App\Services\PhotoService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class PhotoController extends Controller
{
    use SystemTrait;
    protected $photoService;
    public function __construct(PhotoService $photoService)
    {
        $this->photoService = $photoService;
    }
    public function index()
    {
        try {
            if (Gate::allows('photo.index')) {
                $data['photo'] = $this->photoService->all();

                return view('admin.photo.index', $data);
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
            if (Gate::allows('photo.index')) {
                $organizations = Organization::pluck('title', 'id'); // Fetch organizations
                return view('admin.photo.form', compact('organizations'));
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

    public function store(PhotoRequest $request)
    {
        try {
            if (Gate::allows('photo.create')) {
                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->image, 'photo');
                }
                return redirect()->route('admin.photo.index')->with('success', 'Photo created successfully.');
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
            if (Gate::allows('photo.index')) {
                $photo = $this->photoService->find($id);
                if (!$photo) {
                    abort(404, 'Photo not found');
                }
                $organizations = Organization::pluck('title', 'id'); // Fetch organizations
                return view('admin.photo.form', compact('photo', 'organizations')); // Pass both variables to the view
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

    /**
     * Update the specified resource in storage.
     */
    public function update(PhotoRequest $photoRequest, $id)
    {
        try {
            if (Gate::allows('photo.index')) {
                $validatedData = $photoRequest->validated();
                $photo = Photo::findOrFail($id);
                if ($photoRequest->hasFile('image')) {
                    if ($photo->image && Storage::disk('public')->exists($photo->image)) {
                        Storage::disk('public')->delete($photo->image);
                    }

                    $validatedData['image'] = $this->imageUpload($photoRequest->image, 'photo');
                }
                $success = $this->photoService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'photo not found');
                }
                return redirect()->route('admin.photo.index')->with('success', 'photo updated successfully.');
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
            if (Gate::allows('photo.index')) {
                $photo = $this->photoService->find($id);

                // Delete the associated PDF if it exists
                if ($photo->image && Storage::disk('public')->exists($photo->image)) {
                    Storage::disk('public')->delete($photo->image);
                }



                $success = $this->photoService->delete($id);
                if (!$success) {
                    abort(404, 'photo not found');
                }
                return redirect()->route('admin.photo.index')->with('error', 'photo deleted successfully.');
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

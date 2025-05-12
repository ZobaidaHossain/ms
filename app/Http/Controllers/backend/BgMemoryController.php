<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\BgMemory;
use App\Http\Requests\BgMemoryRequest;
use App\Services\BgMemoryService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class BgMemoryController extends Controller
{
    use SystemTrait;
    protected $bgMemoryService;
    public function __construct(BgMemoryService $bgMemoryService)
    {
        $this->bgMemoryService = $bgMemoryService;
    }
    public function index()
    {
        try {
            if (Gate::allows('bg-memory.index')) {
                $data['bgMemory'] = $this->bgMemoryService->all();

                return view('admin.bg-memory.index', $data);
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
            if (Gate::allows('bg-memory.index')) {
                return view('admin.bg-memory.form');
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

    public function store(BgMemoryRequest $request)
    {
        try {
            if (Gate::allows('bg-memory.create')) {
                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->image, 'bg-memory');
                }
                BgMemory::create($data);
                return redirect()->route('admin.bg-memory.index')->with('success', 'Background Memory created successfully.');
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
            if (Gate::allows('bg-memory.index')) {
                $bgMemory = $this->bgMemoryService->find($id);
                if (!$bgMemory) {
                    abort(404, 'bg memory not found');
                }
                return view('admin.bg-memory.form', compact('bgMemory'));
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
    public function update(BgMemoryRequest $bgMemoryRequest, $id)
    {
        try {
            if (!Gate::allows('bg-memory.index')) {
                return view('errors.403');
            }
            $validatedData = $bgMemoryRequest->validated();
            $bgMemory = BgMemory::findOrFail($id);
            if ($bgMemoryRequest->hasFile('image')) {
                if ($bgMemory->image && Storage::disk('public')->exists($bgMemory->image)) {
                    Storage::disk('public')->delete($bgMemory->image);
                }
                $validatedData['image'] = $this->imageUpload($bgMemoryRequest->file('image'), 'bg-memory');
            }
            $bgMemoryUpdated = $this->bgMemoryService->update($id, $validatedData);
            if (!$bgMemoryUpdated) {
                abort(404, 'Bg memory not found');
            }
            return redirect()->route('admin.bg-memory.index')->with('success', 'Bg memory updated successfully.');
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
            if (Gate::allows('bg-memory.index')) {
                $bgMemory = $this->bgMemoryService->find($id);
                if ($bgMemory->image && Storage::disk('public')->exists($bgMemory->image)) {
                    Storage::disk('public')->delete($bgMemory->image);
                }
                $success = $this->bgMemoryService->delete($id);
                if (!$success) {
                    abort(404, 'Bg Memory not found');
                }
                return redirect()->route('admin.bg-memory.index')->with('error', 'Bg Memory deleted successfully.');
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

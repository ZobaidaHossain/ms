<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\FounderRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\ExecutiveRequest;
use App\Models\Executive;
use App\Services\FounderService;
use App\Models\Founder;
use App\Services\ExecutiveService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ExecutiveController extends Controller
{
    use SystemTrait;

    protected $executiveService;

    public function __construct(ExecutiveService $executiveService)
    {
        $this->executiveService = $executiveService;
    }

    public function index()
    {
        try {
            if (Gate::allows('executive.index')) {
                $data['executive'] = $this->executiveService->all();

                return view('admin.executive.index', $data);
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
            if (Gate::allows('executive.index')) {
                return view('admin.executive.form');
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
    public function store(ExecutiveRequest $request)
    {
        try {
            if (Gate::allows('executive.create')) {
                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->image, 'executive');
                }
                Executive::create($data);
                return redirect()->route('admin.executive.index')->with('success', 'Executive created successfully.');
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
            if (Gate::allows('executive.index')) {
                $executive = $this->executiveService->find($id);
                if (!$executive) {
                    abort(404, 'executive not found');
                }
                return view('admin.executive.form', compact('executive'));
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

    public function update(ExecutiveRequest $executiveRequest, $id)
    {
        try {
            if (Gate::allows('executive.edit')) {
                $validatedData = $executiveRequest->validated();

                $executive = Executive::findOrFail($id);

                if ($executiveRequest->hasFile('image')) {
                    if ($executive->image && Storage::disk('public')->exists($executive->image)) {
                        Storage::disk('public')->delete($executive->image);
                    }

                    $validatedData['image'] = $this->imageUpload($executiveRequest->image, 'executive');
                }
                $success = $this->executiveService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'executive not found');
                }
                return redirect()->route('admin.executive.index')->with('success', 'executive updated successfully.');
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
            if (Gate::allows('executive.index')) {
                $executive = $this->executiveService->find($id);
                if ($executive->image && Storage::disk('public')->exists($executive->image)) {
                    Storage::disk('public')->delete($executive->image);
                }
                $success = $this->executiveService->delete($id);
                if (!$success) {
                    abort(404, 'executive not found');
                }
                return redirect()->route('admin.executive.index')->with('error', 'executive deleted successfully.');
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

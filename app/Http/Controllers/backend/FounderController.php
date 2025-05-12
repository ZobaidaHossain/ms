<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\FounderRequest;
use App\Http\Controllers\Controller;
use App\Services\FounderService;
use App\Models\Founder;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class FounderController extends Controller
{
    use SystemTrait;

    protected $founderService;

    public function __construct(FounderService $founderService)
    {
        $this->founderService = $founderService;
    }

    public function index()
    {
        try {
            if (Gate::allows('founder.index')) {
                $data['founder'] = $this->founderService->all();

                return view('admin.founder.index', $data);
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
            if (Gate::allows('founder.index')) {
                return view('admin.founder.form');
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
    public function store(FounderRequest $request)
    {
        try {
            if (Gate::allows('founder.create')) {
                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->image, 'founder');
                }
                Founder::create($data);
                return redirect()->route('admin.founder.index')->with('success', 'Founder created successfully.');
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
            if (Gate::allows('founder.index')) {
                $founder = $this->founderService->find($id);
                if (!$founder) {
                    abort(404, 'founder not found');
                }
                return view('admin.founder.form', compact('founder'));
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
    public function update(FounderRequest $founderRequest, $id)
    {
        try {
            if (Gate::allows('founder.edit')) {
                $validatedData = $founderRequest->validated();
                $founder = Founder::findOrFail($id);
                if ($founderRequest->hasFile('image')) {

                    if ($founder->image && Storage::disk('public')->exists($founder->image)) {
                        Storage::disk('public')->delete($founder->image);
                    }


                    $validatedData['image'] = $this->imageUpload($founderRequest->image, 'founder');
                }
                $success = $this->founderService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'Founder not found');
                }
                return redirect()->route('admin.founder.index')->with('success', 'Founder updated successfully.');
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
            if (Gate::allows('founder.index')) {
                $founder = $this->founderService->find($id);
                if ($founder->image && Storage::disk('public')->exists($founder->image)) {
                    Storage::disk('public')->delete($founder->image);
                }

                $success = $this->founderService->delete($id);
                if (!$success) {
                    abort(404, 'Founder not found');
                }
                return redirect()->route('admin.founder.index')->with('error', 'Founder deleted successfully.');
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

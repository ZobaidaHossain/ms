<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AudienceRequest;
use App\Models\Audience;
use App\Services\AudienceService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AudienceController extends Controller
{
    use SystemTrait;
    protected $audienceService;
    public function __construct(AudienceService $audienceService)
    {
        $this->audienceService = $audienceService;
    }
    public function index()
    {
        try {
            if (Gate::allows('audience.index')) {
                $data['audience'] = $this->audienceService->all();
                return view('admin.audience.index', $data);
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
                return view('admin.audience.form');
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
    public function store(AudienceRequest $request)
    {
        try {
            if (Gate::allows('audience.create')) {
                $data = $request->validated();

                Audience::create($data);
                // $data['audience'] = Audience::get();

                // return view('admin.audience.index', $data);
                return redirect()->route('admin.audience.index')->with('success', 'Audience created successfully.');
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
                $audience = $this->audienceService->find($id);
                if (!$audience) {
                    abort(404, 'Audience not found');
                }
                return view('admin.audience.form', compact('audience'));
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
    public function update(AudienceRequest $audienceRequest, $id)
    {
        try {
            if (Gate::allows('dashboard.index')) {
                $validatedData = $audienceRequest->validated();

                $success = $this->audienceService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'audience not found');
                }
                return redirect()->route('admin.audience.index')->with('success', 'Audience updated successfully.');
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

                $success = $this->audienceService->delete($id);
                if (!$success) {
                    abort(404, 'audience not found');
                }
                return redirect()->route('admin.audience.index')->with('error', 'audience deleted successfully.');
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

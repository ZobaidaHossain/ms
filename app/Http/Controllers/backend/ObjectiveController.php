<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ObjectiveRequest;
use App\Models\Objective;
use App\Services\ObjectiveService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class ObjectiveController extends Controller
{
    use SystemTrait;
    protected $objectiveService;

    public function __construct(ObjectiveService $objectiveService)
    {
        $this->objectiveService = $objectiveService;
    }
    public function index()
    {
        try {
            if (Gate::allows('objective.index')) {
                $data['objective'] = $this->objectiveService->all();
                return view('admin.objective.index', $data);
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
            if (Gate::allows('objective.index')) {
                return view('admin.objective.form');
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


    public function store(ObjectiveRequest $request)
    {
        try {
            if (Gate::allows('objective.create')) {
                $data = $request->validated();

                Objective::create($data);
                return redirect()->route('admin.objective.index')->with('success', 'Objective created successfully.');
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
            if (Gate::allows('objective.index')) {
                $objective = $this->objectiveService->find($id);
                if (!$objective) {
                    abort(404, 'objective not found');
                }
                return view('admin.objective.form', compact('objective'));
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
    public function update(ObjectiveRequest $objectiveRequest, $id)
    {
        try {
            if (Gate::allows('dashboard.index')) {
                $validatedData = $objectiveRequest->validated();

                $success = $this->objectiveService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'objective not found');
                }
                return redirect()->route('admin.objective.index')->with('success', 'objective updated successfully.');
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
            if (Gate::allows('objective.index')) {
                $success = $this->objectiveService->delete($id);
                if (!$success) {
                    abort(404, 'objective not found');
                }
                return redirect()->route('admin.objective.index')->with('error', 'objective deleted successfully.');
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

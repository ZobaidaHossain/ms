<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\GoalRequest;
use App\Http\Requests\SliderRequest;
use App\Models\Goal;
use App\Services\GoalService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class GoalController extends Controller
{
    use SystemTrait;
    protected $goalService;

    public function __construct(GoalService $goalService)
    {
        $this->goalService = $goalService;
    }
    public function index()
    {
        try {
            if (Gate::allows('goal.index')) {
                $data['goal'] = $this->goalService->all();
                return view('admin.goal.index', $data);
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
            if (Gate::allows('goal.index')) {
                return view('admin.goal.form');
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
    public function store(GoalRequest $request)
    {
        try {
            if (Gate::allows('goal.create')) {
                $data = $request->validated();

                Goal::create($data);
                return redirect()->route('admin.goal.index')->with('success', 'Goal created successfully.');
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
            if (Gate::allows('goal.index')) {
                $goal = $this->goalService->find($id);
                if (!$goal) {
                    abort(404, 'goal not found');
                }
                return view('admin.goal.form', compact('goal'));
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
    public function update(GoalRequest $goalRequest, $id)
    {
        try {
            if (Gate::allows('dashboard.index')) {
                $validatedData = $goalRequest->validated();

                $success = $this->goalService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'About us not found');
                }
                return redirect()->route('admin.goal.index')->with('success', 'goal updated successfully.');
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
            if (Gate::allows('goal.index')) {
                $success = $this->goalService->delete($id);
                if (!$success) {
                    abort(404, 'goal not found');
                }
                return redirect()->route('admin.goal.index')->with('error', 'goal deleted successfully.');
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

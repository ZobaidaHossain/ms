<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\IntroductionRequest;
use App\Http\Requests\ProjectRequest;
use App\Models\Introduction;
use App\Models\Project;
use App\Services\IntroductionService;
use App\Services\ProjectService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ProjectController extends Controller
{
    use SystemTrait;
    protected $projectService;

    public function __construct(ProjectService $projectService)
    {
        $this->projectService = $projectService;
    }
    public function index()
    {
        try {
            if (Gate::allows('project.index')) {
                $data['project'] = $this->projectService->all();
                // dd(   $data );
                return view('admin.project.index', $data);
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
            if (Gate::allows('project.index')) {
                // Fetch active clients using ClientService
                return view('admin.project.form');
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


    public function store(ProjectRequest $request)
    {
        try {
            if (Gate::allows('project.create')) {
                $data = $request->validated();
                Project::create($data);
                return redirect()->route('admin.project.index')->with('success', 'Project created successfully.');
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
            if (Gate::allows('project.index')) {
                $project = $this->projectService->find($id);
                if (!$project) {
                    abort(404, 'project not found');
                }
                return view('admin.project.form', compact('project'));
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
    public function update(ProjectRequest $projectRequest, $id)
    {
        try {
            if (Gate::allows('project.index')) {
                $validatedData = $projectRequest->validated();

                $success = $this->projectService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'project not found');
                }
                return redirect()->route('admin.project.index')->with('success', 'project updated successfully.');
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
            if (Gate::allows('project.index')) {
                $success = $this->projectService->delete($id);
                if (!$success) {
                    abort(404, 'project not found');
                }
                return redirect()->route('admin.project.index')->with('error', 'project deleted successfully.');
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

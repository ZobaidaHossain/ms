<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Http\Requests\TeamRequest;
use App\Models\Slider;
use App\Models\Team;
use App\Services\SliderService;
use App\Services\TeamService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    use SystemTrait;
    protected $teamService;

    public function __construct(TeamService $teamService)
    {
        $this->teamService = $teamService;
    }
    public function index()
    {
        try {
            if (Gate::allows('team.index')) {
                $data['team'] = $this->teamService->all();
                return view('admin.team.index', $data);
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
            if (Gate::allows('team.index')) {
                return view('admin.team.form');
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
    public function store(TeamRequest $request)
    {
        try {
            if (Gate::allows('team.create')) {
                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->image, 'team');
                }
                if ($request->hasFile('pdf')) {
                    $data['pdf'] = $this->fileUpload($request->file('pdf'), 'team/pdf');
                }
                Team::create($data);
                return redirect()->route('admin.team.index')->with('success', 'Team created successfully.');
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
            if (Gate::allows('team.index')) {
                $team = $this->teamService->find($id);
                if (!$team) {
                    abort(404, 'team not found');
                }
                return view('admin.team.form', compact('team'));
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
    public function update(TeamRequest $teamRequest, $id)
    {
        try {
            if (Gate::allows('team.index')) {
                $validatedData = $teamRequest->validated();
                $team = Team::findOrFail($id);
                if ($teamRequest->hasFile('image')) {
                    if ($team->image && Storage::disk('public')->exists($team->image)) {
                        Storage::disk('public')->delete($team->image);
                    }
                    $validatedData['image'] = $this->imageUpload($teamRequest->image, 'team');
                }
                $team = Team::findOrFail($id);
                if ($teamRequest->hasFile('pdf')) {
                    if ($team->pdf) {
                        Storage::disk('public')->delete($team->pdf);
                    }
                    $validatedData['pdf'] = $this->fileUpload($teamRequest->file('pdf'), 'team/pdf');
                }

                $success = $this->teamService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'team not found');
                }
                return redirect()->route('admin.team.index')->with('success', 'team updated successfully.');
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
            if (Gate::allows('team.index')) {
                $team = $this->teamService->find($id);
                if ($team->image && Storage::disk('public')->exists($team->image)) {
                    Storage::disk('public')->delete($team->image);
                }
                if ($team->pdf && Storage::disk('public')->exists($team->pdf)) {
                    Storage::disk('public')->delete($team->pdf);
                }
                $success = $this->teamService->delete($id);
                if (!$success) {
                    abort(404, 'team not found');
                }
                return redirect()->route('admin.team.index')->with('error', 'team deleted successfully.');
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

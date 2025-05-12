<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\HelpRequest;
use App\Models\Help;
use App\Services\HelpService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class HelpController extends Controller
{
    use SystemTrait;
    protected $helpService;

    public function __construct(HelpService $helpService)
    {
        $this->helpService = $helpService;
    }
    public function index()
    {
        try {
            if (Gate::allows('help.index')) {
                $data['help'] = $this->helpService->all();
                return view('admin.help.index', $data);
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
            if (Gate::allows('help.index')) {
                // Fetch active clients using ClientService
                return view('admin.help.form');
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
    public function store(HelpRequest $request)
    {
        try {
            if (Gate::allows('help.create')) {
                $data = $request->validated();
                Help::create($data);
                return redirect()->route('admin.help.index')->with('success', 'Help created successfully.');
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
            if (Gate::allows('help.index')) {
                $help = $this->helpService->find($id);
                if (!$help) {
                    abort(404, 'help not found');
                }
                return view('admin.help.form', compact('help'));
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
    public function update(HelpRequest $helpRequest, $id)
    {
        try {
            if (Gate::allows('dashboard.index')) {
                $validatedData = $helpRequest->validated();
                $success = $this->helpService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'help not found');
                }
                return redirect()->route('admin.help.index')->with('success', 'help updated successfully.');
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
            if (Gate::allows('help.index')) {
                $success = $this->helpService->delete($id);
                if (!$success) {
                    abort(404, 'help not found');
                }
                return redirect()->route('admin.help.index')->with('error', 'help deleted successfully.');
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

<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\IntroductionRequest;
use App\Models\Introduction;
use App\Services\IntroductionService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class IntroductionController extends Controller
{
    use SystemTrait;
    protected $introductionService;

    public function __construct(IntroductionService $introductionService)
    {
        $this->introductionService = $introductionService;
    }
    public function index()
    {
        try {
            if (Gate::allows('introduction.index')) {
                $data['introduction'] = $this->introductionService->all();
                return view('admin.introduction.index', $data);
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
            if (Gate::allows('introduction.index')) {
                return view('admin.introduction.form');
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


    public function store(IntroductionRequest $request)
    {
        try {
            if (Gate::allows('introduction.create')) {
                $data = $request->validated();
                Introduction::create($data);
                return redirect()->route('admin.introduction.index')->with('success', 'Introduction created successfully.');
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
            if (Gate::allows('introduction.index')) {
                $introduction = $this->introductionService->find($id);
                if (!$introduction) {
                    abort(404, 'introduction not found');
                }
                return view('admin.introduction.form', compact('introduction'));
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
    public function update(IntroductionRequest $introductionRequest, $id)
    {
        try {
            if (Gate::allows('introduction.index')) {
                $validatedData = $introductionRequest->validated();

                $success = $this->introductionService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'introduction not found');
                }
                return redirect()->route('admin.introduction.index')->with('success', 'introduction updated successfully.');
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
            if (Gate::allows('introduction.index')) {
                $success = $this->introductionService->delete($id);
                if (!$success) {
                    abort(404, 'introduction not found');
                }
                return redirect()->route('admin.introduction.index')->with('error', 'introduction deleted successfully.');
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

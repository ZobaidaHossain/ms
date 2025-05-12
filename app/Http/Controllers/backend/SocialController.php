<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SocialRequest;
use App\Http\Requests\SliderRequest;
use App\Models\Social;
use App\Models\Slider;
use App\Services\SocialService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class SocialController extends Controller
{
    use SystemTrait;
    protected $socialService;

    public function __construct(SocialService $socialService)
    {
        $this->socialService = $socialService;
    }
    public function index()
    {
        try {
            if (Gate::allows('social.index')) {
                $data['social'] = $this->socialService->all();
                return view('admin.social.index', $data);
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
            if (Gate::allows('social.index')) {
                return view('admin.social.form');
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
    public function store(SocialRequest $request)
    {
        try {
            if (Gate::allows('social.create')) {
                $data = $request->validated();
                Social::create($data);
                return redirect()->route('admin.social.index')->with('success', 'Social created successfully.');
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
            if (Gate::allows('social.index')) {
                $social = $this->socialService->find($id);
                if (!$social) {
                    abort(404, 'social not found');
                }
                return view('admin.social.form', compact('social'));
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
    public function update(SocialRequest $socialRequest, $id)
    {
        try {
            if (Gate::allows('social.index')) {
                $validatedData = $socialRequest->validated();

                $success = $this->socialService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'social not found');
                }
                return redirect()->route('admin.social.index')->with('success', 'social updated successfully.');
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
            if (Gate::allows('social.index')) {
                $success = $this->socialService->delete($id);
                if (!$success) {
                    abort(404, 'social not found');
                }
                return redirect()->route('admin.social.index')->with('error', 'social deleted successfully.');
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

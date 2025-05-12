<?php

namespace App\Http\Controllers\backend;
use App\Http\Requests\FounderRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\SupportRequest;
use App\Services\FounderService;
use App\Models\Founder;
use App\Models\Support;
use App\Services\SupportService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;
class SupportController extends Controller
{
    use SystemTrait;

    protected $supportService;

    public function __construct(SupportService $supportService)
    {
        $this->supportService = $supportService;
    }

    public function index()
    {
        try {
            if (Gate::allows('support.index')) {
                $data['support'] = $this->supportService->all();

                return view('admin.support.index', $data);
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
            if (Gate::allows('support.index')) {
                return view('admin.support.form');
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
    public function store(SupportRequest $request)
    {
        try {
            if (Gate::allows('support.create')) {
                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->image, 'support');
                }
                Support::create($data);
                return redirect()->route('admin.support.index')->with('success', 'Support created successfully.');
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
            if (Gate::allows('support.index')) {
                $support = $this->supportService->find($id);
                if (!$support) {
                    abort(404, 'support not found');
                }
                return view('admin.support.form', compact('support'));
            }
            return view('errors.403');
        }catch (\Throwable $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Technical error!',
                'error' => $e->getMessage(),
            ]);
        }
    }
    public function update(SupportRequest $supportRequest, $id)
    {
        try {
            if (Gate::allows('support.edit')) {
              $validatedData=$supportRequest->validated();

              $support = Support::findOrFail($id);

              if ($supportRequest->hasFile('image')) {

                if ($support->image && Storage::disk('public')->exists($support->image)) {
                    Storage::disk('public')->delete($support->image);
                }

                $validatedData['image'] = $this->imageUpload($supportRequest->image, 'support');
            }
              $success = $this->supportService->update($id, $validatedData);
              if (!$success) {
                abort(404, 'Founder not found');
            }
            return redirect()->route('admin.founder.index')->with('success', 'support updated successfully.');

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
            if (Gate::allows('support.index')) {

                $support = $this->supportService->find($id);
                if ($support->image && Storage::disk('public')->exists($support->image)) {
                    Storage::disk('public')->delete($support->image);
                }


                $success = $this->supportService->delete($id);
                if (!$success) {
                    abort(404, 'support not found');
                }
                return redirect()->route('admin.support.index')->with('error', 'support deleted successfully.');
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

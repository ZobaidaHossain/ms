<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Services\NoticeService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Requests\NoticeRequest;
use App\Models\Notice;
use Illuminate\Support\Facades\Storage;

class NoticeController extends Controller
{
    use SystemTrait;
    protected $noticeService;
    public function __construct(NoticeService $noticeService)
    {
        $this->noticeService = $noticeService;
    }
    public function index()
    {
        try {
            if (Gate::allows('notice.index')) {
                $data['notice'] = $this->noticeService->all();

                return view('admin.notice.index', $data);
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
            if (Gate::allows('notice.index')) {
                // Fetch active clients using ClientService
                return view('admin.notice.form');
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
    public function store(NoticeRequest $request)
    {
        try {
            if (!Gate::allows('notice.create')) {
                return response()->json(['status' => 403, 'message' => 'Access Denied'], 403);
            }

            $data = $request->validated();

            if ($request->hasFile('pdf')) {
                $data['pdf'] = $this->fileUpload($request->file('pdf'), 'notice/pdf');
            }

            Notice::create($data);
            return redirect()->route('admin.notice.index')->with('success', 'Notice created successfully.');
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
            if (Gate::allows('notice.index')) {
                $notice = $this->noticeService->find($id);
                if (!$notice) {
                    abort(404, 'notice not found');
                }
                return view('admin.notice.form', compact('notice'));
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
    public function update(NoticeRequest $request, $id)
    {
        try {
            if (!Gate::allows('notice.index')) {
                return response()->json(['status' => 403, 'message' => 'Access Denied'], 403);
            }
            $validatedData = $request->validated();
            $notice = Notice::findOrFail($id);
            if ($request->hasFile('pdf')) {
                if ($notice->pdf && Storage::disk('public')->exists($notice->pdf)) {
                    Storage::disk('public')->delete($notice->pdf);
                }
                $validatedData['pdf'] = $this->fileUpload($request->file('pdf'), 'notice/pdf');
            }
            $notice->update($validatedData);
            return redirect()->route('admin.notice.index')->with('success', 'Notice updated successfully.');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return response()->json(['status' => 404, 'message' => 'Notice not found'], 404);
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Technical error!',
                'error' => $e->getMessage(),
            ], 500);
        }
    }
    public function destroy($id)
    {
        try {
            if (Gate::allows('notice.index')) {
                $notice = $this->noticeService->find($id);
                if ($notice->pdf && Storage::disk('public')->exists($notice->pdf)) {
                    Storage::disk('public')->delete($notice->pdf);
                }
                $success = $this->noticeService->delete($id);
                if (!$success) {
                    abort(404, 'Notice not found');
                }
                return redirect()->route('admin.notice.index')->with('error', 'Notice deleted successfully.');
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

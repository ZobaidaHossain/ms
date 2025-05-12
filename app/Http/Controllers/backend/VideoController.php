<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\FounderRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\VideoRequest;
use App\Services\FounderService;
use App\Models\Founder;
use App\Models\Video;
use App\Services\VideoService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class VideoController extends Controller
{
    use SystemTrait;

    protected $videoService;

    public function __construct(VideoService $videoService)
    {
        $this->videoService = $videoService;
    }

    public function index()
    {
        try {
            if (Gate::allows('video.index')) {
                $data['video'] = $this->videoService->all();

                return view('admin.video.index', $data);
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
            if (Gate::allows('video.index')) {
                return view('admin.video.form');
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
    public function store(VideoRequest $request)
    {
        try {
            if (Gate::allows('video.create')) {
                $data = $request->validated();
                if ($request->hasFile('video')) {
                    $data['video'] = $this->videoUpload($request->file('video'), 'video');
                }
                Video::create($data);
                return redirect()->route('admin.video.index')->with('success', 'Video created successfully.');
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
            if (Gate::allows('video.index')) {
                $video = $this->videoService->find($id);
                if (!$video) {
                    abort(404, 'video not found');
                }
                return view('admin.video.form', compact('video'));
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


    public function update(VideoRequest $videoRequest, $id)
    {
        try {

            if (!Gate::allows('video.edit')) {
                return view('errors.403');
            }
            $validatedData = $videoRequest->validated();
            $video = Video::find($id);
            if ($videoRequest->hasFile('video')) {
                if ($video->video && file_exists(storage_path('app/public/' . $video->video))) {
                    unlink(storage_path('app/public/' . $video->video));
                }
                $validatedData['video'] = $this->videoUpload($videoRequest->file('video'), 'video');
            }
            $video->update($validatedData);
            return redirect()->route('admin.video.index')->with('success', 'Video updated successfully.');
        } catch (\Throwable $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Technical error occurred!',
                'error' => $e->getMessage(),
            ]);
        }
    }

    public function destroy($id)
    {
        try {
            if (Gate::allows('video.index')) {
                $video = $this->videoService->find($id);
                if ($video->video && Storage::disk('public')->exists($video->video)) {
                    Storage::disk('public')->delete($video->video);
                }
                $success = $this->videoService->delete($id);
                if (!$success) {
                    abort(404, 'video not found');
                }
                return redirect()->route('admin.video.index')->with('error', 'video deleted successfully.');
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

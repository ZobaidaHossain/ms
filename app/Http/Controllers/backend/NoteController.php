<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\NoteRequest;
use App\Models\Note;
use App\Services\NoteService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class NoteController extends Controller
{
    use SystemTrait;

    protected $noteService;

    public function __construct(NoteService $noteService)
    {
        $this->noteService = $noteService;
    }

    public function index()
    {
        try {
            if (Gate::allows('note.index')) {
                $data['note'] = $this->noteService->all();

                return view('admin.note.index', $data);
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
            if (Gate::allows('note.index')) {
                return view('admin.note.form');
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
    public function store(NoteRequest $request)
    {
        try {
            if (Gate::allows('note.create')) {
                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->image, 'note');
                }
                note::create($data);
                return redirect()->route('admin.note.index')->with('success', 'note created successfully.');
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
            if (Gate::allows('note.index')) {
                $note = $this->noteService->find($id);
                if (!$note) {
                    abort(404, 'note not found');
                }
                return view('admin.note.form', compact('note'));
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
    public function update(NoteRequest $noteRequest, $id)
    {
        try {
            if (Gate::allows('note.edit')) {
              $validatedData=$noteRequest->validated();

              $note = Note::findOrFail($id);

              if ($noteRequest->hasFile('image')) {

                if ($note->image && Storage::disk('public')->exists($note->image)) {
                    Storage::disk('public')->delete($note->image);
                }

                $validatedData['image'] = $this->imageUpload($noteRequest->image, 'note');
            }
              $success = $this->noteService->update($id, $validatedData);
              if (!$success) {
                abort(404, 'Founder not found');
            }
            return redirect()->route('admin.note.index')->with('success', 'note updated successfully.');

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
            if (Gate::allows('note.index')) {

                $note = $this->noteService->find($id);
                if ($note->image && Storage::disk('public')->exists($note->image)) {
                    Storage::disk('public')->delete($note->image);
                }


                $success = $this->noteService->delete($id);
                if (!$success) {
                    abort(404, 'note not found');
                }
                return redirect()->route('admin.note.index')->with('error', 'note deleted successfully.');
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


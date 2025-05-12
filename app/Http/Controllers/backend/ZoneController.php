<?php

namespace App\Http\Controllers\backend;

use App\Http\Requests\ZoneRequest;
use App\Http\Controllers\Controller;
use App\Services\ZoneService;
use App\Models\Zone;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class ZoneController extends Controller
{
    use SystemTrait;

    protected $zoneService;

    public function __construct(ZoneService $zoneService)
    {
        $this->zoneService = $zoneService;
    }

    public function index()
    {
        try {
            if (Gate::allows('zone.index')) {
                $data['zone'] = $this->zoneService->all();

                return view('admin.zone.index', $data);
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
            if (Gate::allows('zone.index')) {
                return view('admin.zone.form');
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
    public function store(ZoneRequest $request)
    {
        try {
            if (Gate::allows('zone.create')) {
                $data = $request->validated();
                if ($request->hasFile('image')) {
                    $data['image'] = $this->imageUpload($request->image, 'zone');
                }
                Zone::create($data);
                return redirect()->route('admin.zone.index')->with('success', 'Zone created successfully.');
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
            if (Gate::allows('zone.index')) {
                $zone = $this->zoneService->find($id);
                if (!$zone) {
                    abort(404, 'zone not found');
                }
                return view('admin.zone.form', compact('zone'));
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

    public function update(ZoneRequest $zoneRequest, $id)
    {
        try {
            if (Gate::allows('zone.edit')) {
                $validatedData = $zoneRequest->validated();


                $zone = Zone::findOrFail($id);

                if ($zoneRequest->hasFile('image')) {

                    if ($zone->image && Storage::disk('public')->exists($zone->image)) {
                        Storage::disk('public')->delete($zone->image);
                    }

                    $validatedData['image'] = $this->imageUpload($zoneRequest->image, 'zone');
                }
                $success = $this->zoneService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'zone not found');
                }
                return redirect()->route('admin.zone.index')->with('success', 'zone updated successfully.');
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
            if (Gate::allows('zone.index')) {

                $zone = $this->zoneService->find($id);
                if ($zone->image && Storage::disk('public')->exists($zone->image)) {
                    Storage::disk('public')->delete($zone->image);
                }
                $success = $this->zoneService->delete($id);
                if (!$success) {
                    abort(404, 'zone not found');
                }
                return redirect()->route('admin.zone.index')->with('error', 'zone deleted successfully.');
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

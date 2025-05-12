<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrganizationRequest;

use App\Models\Organization;


use App\Services\OrganizationService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class OrganizationController extends Controller
{
    use SystemTrait;
    protected $organizationService;

    public function __construct(OrganizationService $organizationService)
    {
        $this->organizationService = $organizationService;
    }
    public function index()
    {
        try {
            if (Gate::allows('organization.index')) {
                $data['organization'] = $this->organizationService->all();
                return view('admin.organization.index', $data);
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
            if (Gate::allows('organization.index')) {
                return view('admin.organization.form');
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


    public function store(OrganizationRequest $request)
    {
        try {
            if (Gate::allows('organization.create')) {
                $data = $request->validated();
                Organization::create($data);
                return redirect()->route('admin.organization.index')->with('success', 'Organization created successfully.');
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
            if (Gate::allows('organization.index')) {
                $organization = $this->organizationService->find($id);
                if (!$organization) {
                    abort(404, 'organization not found');
                }
                return view('admin.organization.form', compact('organization'));
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
    public function update(OrganizationRequest $organizationRequest, $id)
    {
        try {
            if (Gate::allows('organization.index')) {
                $validatedData = $organizationRequest->validated();
                $success = $this->organizationService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'organization not found');
                }
                return redirect()->route('admin.organization.index')->with('success', 'organization updated successfully.');
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
            if (Gate::allows('organization.index')) {
                $success = $this->organizationService->delete($id);
                if (!$success) {
                    abort(404, 'organization not found');
                }
                return redirect()->route('admin.organization.index')->with('error', 'organization deleted successfully.');
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

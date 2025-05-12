<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsRequest;
use App\Http\Requests\BackgroundRequest;
use App\Http\Requests\ContractRequest;
use App\Http\Requests\SliderRequest;
use App\Models\AboutUs;
use App\Models\Background;
use App\Models\Contract;
use App\Models\Slider;
use App\Services\AboutUsService;
use App\Services\BackgroundService;
use App\Services\ContractService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class ContractController extends Controller
{
    use SystemTrait;
    protected $contractService;

    public function __construct(ContractService $contractService)
    {
        $this->contractService = $contractService;
    }
    public function index()
    {
        try {
            if (Gate::allows('contract.index')) {
                $data['contract'] = $this->contractService->all();
                return view('admin.contract.index', $data);
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
            if (Gate::allows('contract.index')) {
                return view('admin.contract.form');
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


    public function store(ContractRequest $request)
    {
        try {
            if (Gate::allows('contract.create')) {
                $data = $request->validated();

                Contract::create($data);
                return redirect()->route('admin.contract.index')->with('success', 'Contact created successfully.');
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
            if (Gate::allows('contract.index')) {
                $contract = $this->contractService->find($id);
                if (!$contract) {
                    abort(404, 'contract not found');
                }
                return view('admin.contract.form', compact('contract'));
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
    public function update(ContractRequest $contractRequest, $id)
    {
        try {
            if (Gate::allows('contract.index')) {
                $validatedData = $contractRequest->validated();

                $success = $this->contractService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'contract not found');
                }
                return redirect()->route('admin.contract.index')->with('success', 'Background updated successfully.');
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
            if (Gate::allows('contract.index')) {
                $success = $this->contractService->delete($id);
                if (!$success) {
                    abort(404, 'contract not found');
                }
                return redirect()->route('admin.contract.index')->with('error', 'Background deleted successfully.');
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

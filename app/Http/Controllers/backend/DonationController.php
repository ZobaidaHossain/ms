<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\AboutUsRequest;
use App\Http\Requests\BackgroundRequest;
use App\Http\Requests\ContractRequest;
use App\Http\Requests\DonationRequest;
use App\Http\Requests\SliderRequest;
use App\Models\AboutUs;
use App\Models\Background;
use App\Models\Contract;
use App\Models\Donation;
use App\Models\Slider;
use App\Services\AboutUsService;
use App\Services\BackgroundService;
use App\Services\ContractService;
use App\Services\DonationService;
use App\Traits\SystemTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Log;

class DonationController extends Controller
{
    use SystemTrait;
    protected $donationService;

    public function __construct(DonationService $donationService)
    {
        $this->donationService = $donationService;
    }
    public function index()
    {
        try {
            if (Gate::allows('donation.index')) {
                $data['donation'] = $this->donationService->all();
                return view('admin.donation.index', $data);
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
            if (Gate::allows('donation.index')) {
                return view('admin.donation.form');
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


    public function store(DonationRequest $request)
    {
        try {
            if (Gate::allows('donation.create')) {
                $data = $request->validated();

                Donation::create($data);
                return redirect()->route('admin.donation.index')->with('success', 'donation created successfully.');
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
            if (Gate::allows('donation.index')) {
                $donation = $this->donationService->find($id);
                if (!$donation) {
                    abort(404, 'donation not found');
                }
                return view('admin.donation.form', compact('donation'));
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
    public function update(DonationRequest $donationRequest, $id)
    {
        try {
            if (Gate::allows('donation.index')) {
                $validatedData = $donationRequest->validated();

                $success = $this->donationService->update($id, $validatedData);
                if (!$success) {
                    abort(404, 'donation not found');
                }
                return redirect()->route('admin.donation.index')->with('success', 'donation updated successfully.');
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
            if (Gate::allows('donation.index')) {
                $success = $this->donationService->delete($id);
                if (!$success) {
                    abort(404, 'donation not found');
                }
                return redirect()->route('admin.donation.index')->with('error', 'donation deleted successfully.');
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

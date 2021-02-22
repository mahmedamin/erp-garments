<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\GatePass;
use App\Models\GatePassDetail;
use App\Models\PaymentType;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Inertia\Inertia;

class GatePassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Inertia\Response
     */
    public function index()
    {
        $gatePasses = GatePass::all();

        return Inertia::render('Admin/GatePass/Index', compact('gatePasses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Inertia\Response
     */
    public function create()
    {
        $units = Unit::select('id', 'name')->get();
        $departments = Department::select('id', 'name')->get();
        $paymentTypes = PaymentType::select('id', 'name')->get();

        return Inertia::render('Admin/GatePass/GatePass', compact('units', 'departments', 'paymentTypes'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(Request $request)
    {
        return Validator::make($request->all(), [
            'name' => 'required',
            'department_id' => 'required',
            'is_returnable' => 'required',
            'confirmation' => 'accepted',
            'details.*.payment_type_id' => 'required',
            'details.*.unit_id' => 'required',
            'details.*.quantity' => 'required|numeric|min:1',
            'details.*.amount' => 'numeric',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {

        $this->validator($request)->validate();

        $gatePass = GatePass::create($request->only([
            'name',
            'style',
            'contact',
            'department_id',
            'purpose',
            'is_returnable',
            'driver_name',
            'vehicle_number',
        ]));

        $details = [];
        foreach ($request->details as $detail) {
            $details[] = [
                'gate_pass_id' => $gatePass->id,
                'description' => $detail['description'],
                'payment_type_id' => $detail['payment_type_id'],
                'quantity' => $detail['quantity'],
                'unit_id' => $detail['unit_id'],
                'amount' => $detail['amount'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }

        GatePassDetail::insert($details);

        return Redirect::route('admin.gate-pass.index');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Inertia\Response
     */
    public function edit(GatePass $gatePass)
    {
        $gatePass->load('details');
        $units = Unit::select('id', 'name')->get();
        $departments = Department::select('id', 'name')->get();
        $paymentTypes = PaymentType::select('id', 'name')->get();

        return Inertia::render('Admin/GatePass/GatePass', compact('gatePass', 'units', 'departments', 'paymentTypes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $gatewayId)
    {
        $this->validator($request)->validate();

        GatePass::where('id', $gatewayId)->update($request->only([
            'name',
            'style',
            'contact',
            'department_id',
            'purpose',
            'is_returnable',
            'driver_name',
            'vehicle_number',
        ]));

        $details = [];
        foreach ($request->details as $detail) {
            $details[] = [
                'gate_pass_id' => $gatewayId,
                'description' => $detail['description'],
                'payment_type_id' => $detail['payment_type_id'],
                'quantity' => $detail['quantity'],
                'unit_id' => $detail['unit_id'],
                'amount' => $detail['amount'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ];
        }

        GatePassDetail::where('gate_pass_id', $gatewayId)->delete();
        GatePassDetail::insert($details);

        return Redirect::route('admin.gate-pass.index')->with('success', 'User created.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

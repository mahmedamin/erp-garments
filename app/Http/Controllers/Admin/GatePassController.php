<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\GatePass;
use App\Models\GatePassDetail;
use App\Models\Unit;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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
        $types = GatePassDetail::getPossibleEnumValues('type');

        return Inertia::render('Admin/GatePass/GatePass', compact('units', 'departments', 'types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'department_id' => 'required',
            'amount' => 'numeric',
            'confirmation' => 'accepted',
            'details.*.type' => 'required',
            'details.*.unit_id' => 'required',
            'details.*.quantity' => 'required|numeric|min:1',
            'details.*.is_returnable' => 'required',
        ]);

        $gatePass = GatePass::create($request->only([
            'name',
            'style',
            'contact',
            'department_id',
            'purpose',
            'amount',
            'driver_name',
            'vehicle_number',
        ]));

        $details = [];
        foreach ($request->details as $detail) {
            $details[] = [
                'gate_pass_id' => $gatePass->id,
                'description' => $detail['description'],
                'type' => $detail['type'],
                'quantity' => $detail['quantity'],
                'unit_id' => $detail['unit_id'],
                'is_returnable' => $detail['is_returnable'],
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
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

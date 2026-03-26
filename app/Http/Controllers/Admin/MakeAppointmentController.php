<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MakeAppointmentRequest;
use App\Models\MakeAppointment;

class MakeAppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.make_appointment.index',['make_appointments'=>MakeAppointment::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.make_appointment.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(MakeAppointmentRequest $request)
    {
        $make_appointmentData = $request->all();

        MakeAppointment::create($make_appointmentData);

        return redirect()->back()->with('created','Post sended successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(MakeAppointment $make_appointment)
    {
        return view('admin.make_appointment.show',compact('make_appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MakeAppointment $make_appointment)
    {
        return view('admin.make_appointment.edit',compact('make_appointment'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(MakeAppointmentRequest $request, MakeAppointment $make_appointment)
    {
        $make_appointmentData = $request->all();

        $make_appointment->update($make_appointmentData);

        return redirect()->route('admin.make_appointment.index')->with('updated','Post updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MakeAppointment $make_appointment)
    {
        $make_appointment->delete();

        return back()->with('deleted','Post deleted successfully!');
    }
}

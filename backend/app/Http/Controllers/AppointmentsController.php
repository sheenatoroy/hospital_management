<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentsController extends Controller
{
    public function index(Request $request)
    {

        $appointments = Appointment::all();
        return response()->json($appointments);
    }

    public function show($id)
    {

        $appointment = Appointment::where('id', $id)->firstOrFail();

        return response()->json($appointment);
    }

    public function store(Request $request)
    {

        $appointment = Appointment::create([
            'day' => $request->day,
            'patient_id' => auth('sanctum')->user()->details_id,
            'doctor_id' => $request->doctor_id
        ]);

        return response()->json($appointment);
    }

    public function update(Request $request, $id)
    {

        $appointment = Appointment::where('id', $id)->firstOrFail();
        $appointment->day = $request->day;
        $appointment->save();

        return response()->json([
            'message' => 'Appointment updated'
        ]);
    }

    public function destroy($id)
    {
        $appointment = Appointment::where('id', $id)->firstOrFail();
        $appointment->delete();

        return response()->json([
            'message' => 'Appointment deleted'
        ]);
    }
}

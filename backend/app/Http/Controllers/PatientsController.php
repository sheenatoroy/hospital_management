<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Validator;

class PatientsController extends Controller
{
    //
    public function index()
    {

        $patients = Patient::all();

        return response()->json($patients);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|unique:patients',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->messages());
        }

        $patient = Patient::create([
            "name" => $request->name,
            "email" => $request->email,
        ]);

        return response()->json($patient);
    }

    public function show($id)
    {
        $patient = Patient::where('id', $id)->firstOrFail();

        return response()->json($patient);
    }

    public function update(Request $request, $id)
    {
        try {
            $patient = Patient::where('id', $id)->firstOrFail();

            $patient->name = $request->name;
            $patient->email = $request->email;

            $patient->save();

            return response()->json($patient);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {
        try {
            $patient = Patient::where('id', $id)->firstOrFail();
            $patient->delete();

            return response()->json([
                'message' => "Patient deleted"
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

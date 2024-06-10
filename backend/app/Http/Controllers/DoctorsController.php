<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorsController extends Controller
{
    public function index()
    {
        try {
            $doctors = Doctor::all();
            return response()->json($doctors);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show($id)
    {
        try {
            $doctor = Doctor::where('id', $id)->firstOrFail();
            return response()->json($doctor);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        try {
            $doctor = Doctor::create([
                "name" => $request->name,
                "email" => $request->email,
            ]);
            return response()->json($doctor);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request, $id)
    {
        try {

            $doctor = Doctor::where('id', $id)->firstOrFail();
            $doctor->name = $request->name;
            $doctor->email = $request->email;
            $doctor->save();

            return response()->json($doctor);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destroy($id)
    {
        try {
            $doctor = Doctor::where('id', $id)->firstOrFail();
            $doctor->delete();

            return response()->json([
                'message' => 'Doctor account deleted'
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}

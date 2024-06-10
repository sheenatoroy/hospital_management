<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Record;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class RecordsController extends Controller
{
    public function index(Request $request)
    {
        try {

            $records = Record::all();
            return response()->json($records, 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function show($id)
    {
        try {

            $record = Record::where('id', $id)->firstOrFail();

            return response()->json($record);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function store(Request $request)
    {
        try {
            $record = Record::create([
                'patient_id' => $request->patient_id,
                'doctor_id' => $request->doctor_id,
                'date' => date('Y-m-d'),
            ]);

            return response()->json($record);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function update(Request $request, $id)
    {
        $record = Record::where('id', $id)->firstOrFail();
        $record->date = $request->date;
        $record->save();

        return response()->json([
            'message' => 'Record has been updated'
        ]);
    }

    public function destroy($id)
    {


        $record = Record::where('id', $id)->firstOrFail();
        $record->delete();

        return response()->json([
            'message' => 'Record deleted'
        ]);
    }
}

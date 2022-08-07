<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Jadwal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class JadwalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        // RETURN VIEW DISINI GUS
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validator
        $validator = Validator::make($request->all(), [
            'matakuliah_id' => 'required',
            'jadwal' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }
        
        $jadwal = Jadwal::create($request->all());

        // RETURN VIEW DISINI GUS
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $jadwal = Jadwal::find($id);
         if (!$jadwal) {
            return response()->json([
                'status' => 'error',
                'message' => 'Jadwal dengan id ' . $id . ' tidak ditemukan'
            ], 404);
        }

        // RETURN VIEW DISINI GUS
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $jadwal = Jadwal::find($id);
        if (!$jadwal) {
            return response()->json([
                'status' => 'error',
                'message' => 'Jadwal dengan id ' . $id . ' tidak ditemukan'
            ], 404);
        }
        
        $validator = Validator::make($request->all(), [
            'matakuliah_id' => 'required',
            'jadwal' => 'required'
        ]);
        
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }
        
        $jadwal->update($request->all());
        
        // RETURN VIEW DISINI GUS
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jadwal = Jadwal::find($id);
        if (!$jadwal) {
            return response()->json([
                'status' => 'error',
                'message' => 'Jadwal dengan id ' . $id . ' tidak ditemukan'
            ], 404);
        }
        
        $jadwal->delete();
        
        // RETURN VIEW DISINI GUS
    }
}

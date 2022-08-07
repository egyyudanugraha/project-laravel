<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kontrak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class KontrakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kontrak = Kontrak::all();
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
            'mahasiswa_id' => 'required',
            'semester_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }
        
        $kontrak = Kontrak::create($request->all());

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
        $kontrak = Kontrak::find($id);
        if (!$kontrak) {
            return response()->json([
                'status' => 'error',
                'message' => 'Kontrak dengan id ' . $id . ' tidak ditemukan'
            ], 400);
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
        $kontrak = Kontrak::find($id);
        if (!$kontrak) {
            return response()->json([
                'status' => 'error',
                'message' => 'Kontrak dengan id ' . $id . ' tidak ditemukan'
            ], 400);
        }
        
        $kontrak->update($request->all());
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
        $kontrak = Kontrak::find($id);
        if (!$kontrak) {
            return response()->json([
                'status' => 'error',
                'message' => 'Kontrak dengan id ' . $id . ' tidak ditemukan'
            ], 400);
        }
        
        $kontrak->delete();
        // RETURN VIEW DISINI GUS
    }
}

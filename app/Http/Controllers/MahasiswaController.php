<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
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
            'nama' => 'required',
            'alamat' => 'required',
            'email' => 'required',
            'no_hp' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }
        
        $mahasiswa = Mahasiswa::create([
            'nama_mahasiswa' => $request->nama,
            'alamat' => $request->alamat,
            'no_tlp' => $request->no_hp,
            'email' => $request->email
        ]);

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
        $mahasiswa = Mahasiswa::find($id);
        if (!$mahasiswa) {
            return response()->json([
                'status' => 'error',
                'message' => 'Mahasiswa dengan id ' . $id . ' tidak ditemukan'
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
        $mahasiswa = Mahasiswa::find($id);
        if (!$mahasiswa) {
            return response()->json([
                'status' => 'error',
                'message' => 'Mahasiswa dengan id ' . $id . ' tidak ditemukan'
            ], 404);
        }
        
        $mahasiswa->update([
            'nama_mahasiswa' => $request->nama ? $request->nama : $mahasiswa->nama_mahasiswa,
            'alamat' => $request->alamat ? $request->alamat : $mahasiswa->alamat,
            'no_tlp' => $request->no_hp ? $request->no_hp : $mahasiswa->no_tlp,
            'email' => $request->email ? $request->email : $mahasiswa->email
        ]);
        
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
        $mahasiswa = Mahasiswa::find($id);
        if (!$mahasiswa) {
            return response()->json([
                'status' => 'error',
                'message' => 'Mahasiswa dengan id ' . $id . ' tidak ditemukan'
            ], 404);
        }
        
        $mahasiswa->delete();
        
        // RETURN VIEW DISINI GUS
    }
}

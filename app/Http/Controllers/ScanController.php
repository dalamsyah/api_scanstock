<?php

namespace App\Http\Controllers;

use App\StockCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ScanController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index()
    {
        $stock = StockCount::all();

        return response()->json([
            'success' => true,
            'message' =>'List Stock Count',
            'data'    => $stock
        ], 200);
    }

    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'item_code'   => 'required',
            'sn' => 'required',
            'sn2' => 'required',
            'scan' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Semua Kolom Wajib Diisi!',
                'data'   => $validator->errors()
            ], 401);

        } else {

            $post = StockCount::create([
                'item_code'     => $request->input('item_code'),
                'sn'   => $request->input('sn'),
                'sn2'     => $request->input('sn2'),
                'scan'   => $request->input('scan'),
            ]);

            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Post Berhasil Disimpan!',
                    'data' => $post
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Post Gagal Disimpan!',
                ], 400);
            }

        }
    }

    public function update(Request $request, $id) {

        $validator = Validator::make($request->all(), [
            'item_code'   => 'required',
            'sn' => 'required',
            'sn2' => 'required',
            'scan' => 'required',
        ]);

        if ($validator->fails()) {

            return response()->json([
                'success' => false,
                'message' => 'Semua Kolom Wajib Diisi!',
                'data'   => $validator->errors()
            ], 401);

        } else {

            $post = StockCount::where('idstokcount', $id)->update([
                'item_code'     => $request->input('item_code'),
                'sn'   => $request->input('sn'),
                'sn2'     => $request->input('sn2'),
                'scan'   => $request->input('scan'),
            ]);

            if ($post) {
                return response()->json([
                    'success' => true,
                    'message' => 'Post Berhasil Disimpan!',
                    'data' => $post
                ], 201);
            } else {
                return response()->json([
                    'success' => false,
                    'message' => 'Post Gagal Disimpan!',
                ], 400);
            }

        }
    }

    public function show($id) 
    {
        $post = StockCount::find($id);

        if ($post) {
            return response()->json([
                'success'   => true,
                'message'   => 'Detail Post!',
                'data'      => $post
            ], 200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'Post Tidak Ditemukan!',
            ], 404);
        }
    }

    //
}

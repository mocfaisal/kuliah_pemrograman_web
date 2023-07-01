<?php

namespace App\Http\Controllers\Backend\Transaksi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_Obat;
use DB;

class Trans_ObatController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('backend.pages.transaksi.obat.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('backend.pages.transaksi.obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

    function getObat(Request $request) {
        $nm_obat = $request->input('name');
        $table =  app(M_Obat::class)->getTable();
        $r = ['success' => false, 'data' => []];

        if ($request->ajax()) {
            $new_data = [];

            $get = DB::table($table)->select(DB::raw('id, nama_dagang as nama'))
                ->where('nama_dagang', 'like', "%" . $nm_obat . "%")
                ->get();

            $data = $get->toArray();

            if (!empty($data)) {
                foreach ($data as $key => $val) {
                    $new_data[] = [
                        'id' => $val->id,
                        'nama' => $val->nama,
                    ];
                }

                $r = ['success' => true, 'data' => $new_data];
                // dd($new_data);
            }
        }
        return response()->json($r);
        // die(json_encode($r));
    }
}

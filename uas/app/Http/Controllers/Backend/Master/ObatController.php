<?php

namespace App\Http\Controllers\Backend\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\M_Obat;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\Facades\DataTables;

class ObatController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('backend.pages.master.obat.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('backend.pages.master.obat.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
        $nm_dagang = $request->input('nm_dagang');
        $nm_generik = $request->input('nm_generik');
        $golongan_obat = $request->input('golongan_obat');
        $dosis = $request->input('dosis');
        $bentuk_sediaan = $request->input('bentuk_sediaan');
        $pabrik = $request->input('pabrik');
        $harga_beli = $request->input('harga_beli');
        $harga_jual = $request->input('harga_jual');
        $stock = $request->input('stock');
        $keterangan = $request->input('keterangan');

        $datasave = [
            'nama_dagang' => $nm_dagang,
            'nama_generik' => $nm_generik,
            'golongan_obat' => $golongan_obat,
            'dosis' => $dosis,
            'bentuk_sediaan' => $bentuk_sediaan,
            'pabrik' => $pabrik,
            'qty' => $stock,
            'harga_beli' => $harga_beli,
            'harga_jual' => $harga_jual,
            'keterangan' => $keterangan,
        ];

        $save = M_Obat::insert($datasave);

        if ($save) {
            $r = [
                'success' => true,
                'msg' => 'Data berhasil disimpan!',
            ];
        } else {
            $r = [
                'success' => false,
                'msg' => 'Data gagal disimpan!',
            ];
        }

        return response()->json($r);
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
        $data['data'] = M_Obat::select('*')->where('id', $id)->first();

        return view('backend.pages.master.obat.update')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request) {

        $id = $request->input('id');
        $nm_dagang = $request->input('nm_dagang');
        $nm_generik = $request->input('nm_generik');
        $golongan_obat = $request->input('golongan_obat');
        $dosis = $request->input('dosis');
        $bentuk_sediaan = $request->input('bentuk_sediaan');
        $pabrik = $request->input('pabrik');
        $harga_beli = $request->input('harga_beli');
        $harga_jual = $request->input('harga_jual');
        $stock = $request->input('stock');
        $keterangan = $request->input('keterangan');

        $datasave = [
            'nama_dagang' => $nm_dagang,
            'nama_generik' => $nm_generik,
            'golongan_obat' => $golongan_obat,
            'dosis' => $dosis,
            'bentuk_sediaan' => $bentuk_sediaan,
            'pabrik' => $pabrik,
            'qty' => $stock,
            'harga_beli' => $harga_beli,
            'harga_jual' => $harga_jual,
            'keterangan' => $keterangan,
        ];

        $save = M_Obat::where('id', $id)->update($datasave);

        if ($save) {
            $r = [
                'success' => true,
                'msg' => 'Data berhasil diupdate!',
            ];
        } else {
            $r = [
                'success' => false,
                'msg' => 'Data gagal diupdate!',
            ];
        }

        return response()->json($r);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request) {
        $id = $request->input('id');

        $result = M_Obat::where('id', $id)->delete();

        if ($result) {
            $r = [
                'success' => true,
                'msg' => 'Data berhasil dihapus!',
            ];
        } else {
            $r = [
                'success' => false,
                'msg' => 'Data gagal dihapus!',
            ];
        }

        return response()->json($r);
    }

    function getData(Request $request) {
        if ($request->ajax()) {
            $new_data = [];
            $data = M_Obat::select('*')->get();

            if (!$data->isEmpty()) {
                foreach ($data as $key => $val) {
                    $val['qty'] = number_format($val['qty'], 0, ",", ".");
                    $new_data[] = $val;
                }
            }

            return DataTables::of($new_data)->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<a href="' . route('master.obat.edit', ['id' => $row['id']])  . '" class="btn icon btn-primary" title="Edit"><i class="bi bi-pencil"></i></a>';
                    $btn .= ' | <a href="javascript:void(0);" onclick="popDelete(' . $row['id'] . ')" class="btn icon btn-danger" title="Delete"><i class="bi bi-x"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        } else {
            return false;
        }
    }
}

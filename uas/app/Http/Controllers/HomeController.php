<?php

namespace App\Http\Controllers;

use App\Models\M_Obat;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller {
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {

        $data_obat = M_Obat::select(DB::raw('nama_dagang AS nm_obat , qty as stock'))
            ->orderBy('qty', 'asc')
            ->limit(10)->get()->toArray();

        return view('backend.pages.home.index')->with('data_obat', $data_obat);
    }
}

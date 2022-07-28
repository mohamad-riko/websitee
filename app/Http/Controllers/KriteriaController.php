<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KriteriaModel;

class KriteriaController extends Controller
{
    public function __construct()
    {
        $this->KriteriaModel = new KriteriaModel();
        $this->middleware('auth');
    }

    public function index()
    {

        $data=[
            'kriteria'=> $this->KriteriaModel->allData(),
        ];
        return view ('v_kriteria', $data);

    }

    //MELIHAT DETAIL//
    public function detail($id_kriteria)
    {
        if (!$this->KriteriaModel->detailData($id_kriteria)) {
            abort(404);
        }
        $data=[
            'kriteria'=> $this->KriteriaModel->detailData($id_kriteria),
        ];
        return view ('v_detailkriteria', $data);
    }

    //MENAMBAH DATA//
    public function add()
    {
        return view('v_addkriteria');
    }


    public function insert()
    {
        Request()->validate([
        'nama' => 'required',
        'bb' => 'required',
        'bt' => 'required',
        'ba' => 'required',
        'nb' => 'required',
        'nt' => 'required',
        'na' => 'required',
        
        
        
    ],
    [
        'nama'=> 'Wajib diisi !!',
        'bb'=> 'Wajib diisi !!',
        'bt'=> 'Wajib diisi !!',
        'ba'=> 'Wajib diisi !!',
        'nb'=> 'Wajib diisi !!',
        'nt'=> 'Wajib diisi !!',
        'na'=> 'Wajib diisi !!',

    ]);

        $data = [
        'nama' => Request()->nama,
        'bb' => Request()->bb,
        'bt' => Request()->bt,
        'ba' => Request()->ba,
        'nb' => Request()->nb,
        'nt' => Request()->nt,
        'na' => Request()->na,  

        ];

        $this->KriteriaModel->addData($data);
        return redirect()->route('kriteria')->with('pesan','data Berhasil Ditambah !!');

    }


}

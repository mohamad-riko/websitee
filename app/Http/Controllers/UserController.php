<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Http\Controllers\Auth; 
use App\Models\PerhitunganModel;

use Auth;

class UserController extends Controller
{
    public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		$no_pendaftaran = Auth::user()->no_pendaftaran;
		$data = PerhitunganModel::where('no_pendaftaran',$no_pendaftaran)->get();

        return view('v_user', compact('data'));
	}







}

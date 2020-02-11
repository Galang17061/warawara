<?php

namespace App\Http\Controllers\frontend\puisi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models;

class puisiController extends Controller
{
	protected $model;

    public function __construct()
    {
        $this->model = new models();
    }   
    public function index_puisi(Request $req)
    {
        $data = $this->model->m_category_puisi()->get();
        return view('frontend.puisi.puisi',compact('data'));
    }
    public function puisi_detail(Request $req)
    {
        $data = $this->model->d_puisi()->where('dp_id',$req->id)->first();
        return view('frontend.puisi.puisi_detail',compact('data'));
    }
}

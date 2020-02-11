<?php

namespace App\Http\Controllers\frontend\shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models;

class shopController extends Controller
{
	protected $model;

    public function __construct()
    {
        $this->model = new models();
    }   
    public function index_shop(Request $req)
    {
        $data = $this->model->m_category_shop()->with('d_shop_image')->get();
        return view('frontend.shop.shop',compact('data'));
    }
    public function shop_detail(Request $req)
    {
        $data = $this->model->d_shop()->with('d_shop_image')->where('ds_id',$req->id)->first();
        return view('frontend.shop.shop_detail',compact('data'));
    }
}

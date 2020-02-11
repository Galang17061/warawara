<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models;

class apiController extends Controller
{

    protected $model;

    public function __construct()
    {
        $this->model = new models();
    }   
    public function FunctionName($value='')
    {
      # code...
    }
    public function index()
    {   
        $category_news  = $this->model->m_category_news()->get();
        $category_event = $this->model->m_category_event()->with('d_event')->get();
        $news           = $this->model->d_news()->with('m_category_news')->paginate(5);
        $carousel       = $this->model->m_setting_carousel()->orderBy('msc_position','ASC')->get();
        return view('index',compact('category_event','category_news','news','carousel'));
    }
    public function api_event_data()
    {
      $data = $this->model->d_event()
                          ->with('m_category_event')
                          ->withCount('d_event_like as total_like')
                          ->withCount('d_event_comment as total_comment')
                          ->get();
                          
      return Response()->json(['status'=>'sukses','hasil'=>$data]);
    }
    public function api_news_data()
    {
      $data = $this->model->d_news()
                          ->with('m_category_news')
                          ->withCount('d_news_like as total_like')
                          ->withCount('d_news_comment as total_comment')
                          ->get();
                          
      return Response()->json(['status'=>'sukses','hasil'=>$data]);
    }
    function news_render(Request $request)
    {
      if($request->ajax()){
          $news = $this->model->d_news()->with('m_category_news')->paginate(5);
          return view('news_result_render', compact('news'))->render();
      }
    }
}

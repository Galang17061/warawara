<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models;

class HomepageController extends Controller
{

    protected $model;

    public function __construct()
    {
        $this->model = new models();
    }   
    public function api_event_data()
    {
      $category_event = $this->model->m_category_event()->with('d_event')->get();
      return Response()->json(['event'=>$category_event]);
    }
    public function index()
    {   
        $category_news   = $this->model->m_category_news()->get();
        $category_event  = $this->model->m_category_event()
                           ->with(['d_event' => function($query) {
                              $query->take(8);
                           }])->get();
        $category_events = $this->model->m_category_event()->get();
        $news            = $this->model->d_news()->with('m_category_news')->paginate(5);
        $puisi           = $this->model->d_puisi()->paginate(6);
        $carousel        = $this->model->m_setting_carousel()->orderBy('msc_position','ASC')->get();
        return view('index',compact('category_event','category_news','news','carousel','puisi','category_events'));
    }
    public function event_data(Request $req)
    {
      $data = $this->model->d_event()
                          ->with('m_category_event')
                          ->withCount('d_event_like')
                          ->withCount('d_event_comment')
                          ->where('e_category',$req->id)
                          ->take(8)
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

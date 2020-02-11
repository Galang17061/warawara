<?php

namespace App\Http\Controllers\backend\master\setting;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\models;
use Auth;
use Storage;
class setting_carouselController extends Controller
{
	protected $model;

    public function __construct()
    {
      $this->middleware('auth');
      $this->model = new models();
    } 
    public function setting_carousel()
    {
    	$data = $this->model->m_setting_carousel()->get();
      return view('backend.master.setting.setting_carousel',compact('data'));
    }
    public function setting_carousel_datatable()
    {
    	$data = $this->model->m_setting_carousel()->get();
	    $data = collect($data);
     	return Datatables::of($data)
          ->addIndexColumn()
          ->toJson();
    }
    public function setting_carousel_save(Request $req)
    {
      dd($req->all());
      $id   = $this->model->m_setting_carousel()->max('msc_id')+1;
      
      $file = $req->file('msc_image');
      if ($file != null) {
          $photo = 'setting/carousel_'.$id.'.jpg';
          Storage::put($photo,file_get_contents($req->file('msc_image')));
      }else{
          $photo = null;
      }
    	$simpan = $this->model->m_setting_carousel()->create([
            'msc_title'=>$req->msc_title,
            'msc_image'=>$photo,
            'msc_position'=>$req->msc_position,
    	]);
    	return Response()->json(['status'=>'sukses']);
    }
    public function setting_carousel_update(Request $req)
    {
      $simpan = $this->model->m_setting_carousel()->where('ce_id',$req->ce_id)
      ->update([
            'ce_name'=>$req->ce_name,
            'ce_icon'=>$req->ce_icon,
            'ce_href'=>$req->ce_href,
      ]);
      return Response()->json(['status'=>'sukses']);
    }
    public function setting_carousel_delete(Request $req)
    {
      $get_data  = $this->model->m_setting_carousel()->where('msc_id',$req->id)->first();
      Storage::delete($get_data->msc_image);
      $delete  = $this->model->m_setting_carousel()->where('msc_id',$req->id)->delete();
      return Response()->json(['status'=>'sukses']);
    }
    public function setting_carousel_frontend()
    {
      $data  = $this->model->m_setting_carousel()->get();
      return Response()->json(['status'=>'sukses','hasil'=>$data]);
    }
}

<?php

namespace App\Http\Controllers\backend\main\puisi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\models;
use Storage;
use Auth;
class main_puisiController extends Controller
{
	protected $model;

    public function __construct()
    {
      $this->middleware('auth');
      $this->model = new models();
    } 
    public function main_puisi()
    {
    	$data = $this->model->d_puisi()->get();
      
      return view('backend.main.puisi.main_puisi',compact('data'));
    }
    public function main_puisi_datatable()
    {
      if (Auth::user()->m_role == 'admin') {
          $data = $this->model->d_puisi()->with('m_mem')->get();
      }else{
          $data = $this->model->d_puisi()->with('m_mem')->where('dp_created_by',Auth::user()->m_id)->get();
      }
	    $data = collect($data);
     	return Datatables::of($data)
          ->addIndexColumn()
          ->toJson();
    }
    public function main_puisi_create()
    {
      $kategori = $this->model->m_category_puisi()->get();
      return view('backend.main.puisi.create_main_puisi',compact('kategori'));
    }
    public function main_puisi_save(Request $req)
    {
      // dd($req->all());
      $id   = $this->model->d_puisi()->max('dp_id')+1;
      $file = $req->file('dp_image');
      if ($file != null) {
          $photo = 'puisi/image_'.$id.'.jpg'/*$file->getClientOriginalExtension()*/;
          Storage::put($photo,file_get_contents($req->file('dp_image')));
      }else{
          $photo = null;
      }
    	$simpan = $this->model->d_puisi()->create([
    		'dp_id'=>$id,
        'dp_title'=>$req->dp_title,
        'dp_content'=>$req->n_content,
        'dp_karya'=>$req->dp_karya,
        'dp_category'=>$req->dp_category,
        'dp_image'=>$photo,
        'dp_created_at'=>date('Y-m-d h:i:s'),
        'dp_created_by'=>Auth::user()->m_id,
    	]);
    	return Response()->json(['status'=>'sukses']);
    }
    public function main_puisi_edit(Request $req)
    {
      $kategori = $this->model->m_category_puisi()->get();
      $data     = $this->model->d_puisi()->where('dp_id',$req->id)->first();
      return view('backend.main.puisi.edit_main_puisi',compact('kategori','data'));
    }
    public function main_puisi_update(Request $req)
    {
      // dd($req->all());
      $cek_data = $this->model->d_puisi()->where('dp_id',$req->dp_id)->first();
      $file     = $req->file('dp_image');
      // return $file;
      if ($file != null) {
          $photo = 'puisi/image_'.$cek_data->n_id.'.jpg';
          Storage::put($photo,file_get_contents($req->file('dp_image')));
      }else{
          $photo = $cek_data->dp_image;
      }
      $simpan = $this->model->d_puisi()->where('dp_id',$req->dp_id)->update([
        'dp_title'=>$req->dp_title,
        'dp_content'=>$req->n_content,
        'dp_category'=>$req->dp_category,
        'dp_karya'=>$req->dp_karya,
        'dp_image'=>$photo,
        'dp_updated_at'=>date('Y-m-d h:i:s'),
        'dp_updated_by'=>Auth::user()->m_id,
      ]);
      return Response()->json(['status'=>'sukses']);
    }
    public function main_puisi_delete(Request $req)
    {
      $delete  = $this->model->d_puisi()->where('dp_id',$req->id)->delete();
      return Response()->json(['status'=>'sukses']);
    }
}

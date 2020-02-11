<?php

namespace App\Http\Controllers\backend\master;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\models;
use Storage;
class userController extends Controller
{
    protected $model;

    public function __construct()
    {
      $this->middleware('auth');
      $this->model = new models();
    } 
    public function user()
    {
        $data = $this->model->m_mem()->get();
      return view('backend.master.user.user',compact('data'));
    }
    public function user_datatable()
    {
        $data = $this->model->m_mem()->get();
        $data = collect($data);
        return Datatables::of($data)
          ->addIndexColumn()
          ->make(true);
    }
    public function user_save(Request $req)
    {
      // dd($req->all()); 
        $id   = $this->model->m_mem()->max('m_id')+1;
        $file = $req->file('m_image');
        if ($file != null) {
            $photo = 'user/image_'.$id.'.jpg';
            Storage::put($photo,file_get_contents($req->file('m_image')));
        }else{
            $photo = null;
        }
      $simpan = $this->model->m_mem()->create([
            'm_id'=>$id,
            'm_username'=>$req->m_username,
            'm_email'=>$req->m_email,
            'm_name'=>$req->m_name,
            'm_desc'=>$req->m_desc,
            'm_city'=>$req->m_city,
            'm_address'=>$req->m_address,
            'm_phone'=>$req->m_phone,
            'm_role'=>'user',
            // 'm_web'=>$req->m_web,
            'm_image'=>$photo,
            'm_password'=>bcrypt($req->m_password),
            'm_created_at'=>date('Y-m-d h:i:s'),
      ]);
      return Response()->json(['status'=>'sukses']);
    }
    public function user_update(Request $req)
    {
      // dd($req->all());
       $gambar = $this->model->m_mem()->where('m_id',$req->m_id)->first();
        $file = $req->file('m_image');
        if ($file != null) {
            $photo = 'user/image_'.$req->m_id.'.jpg';
            Storage::put($photo,file_get_contents($req->file('m_image')));
        }else{
            $photo = $gambar->m_image;
        }
      $simpan = $this->model->m_mem()->where('m_id',$req->m_id)->update([
            'm_username'=>$req->m_username,
            'm_email'=>$req->m_email,
            'm_name'=>$req->m_name,
            'm_desc'=>$req->m_desc,
            'm_city'=>$req->m_city,
            'm_address'=>$req->m_address,
            'm_phone'=>$req->m_phone,
            'm_role'=>'user',
            'm_image'=>$photo,
            'm_password'=>bcrypt($req->m_password),
            'm_created_at'=>date('Y-m-d h:i:s'),
      ]);
      return Response()->json(['status'=>'sukses']);
    }
    public function user_delete(Request $req)
    {
      // event
      $delete  = $this->model->d_event()->where('e_created_by',$req->id)->delete();
      $delete  = $this->model->d_event_comment()->where('dec_creator',$req->id)->delete();
      $delete  = $this->model->d_event_comment()->where('dec_comment_user',$req->id)->delete();
      $delete  = $this->model->d_event_comment_dt()->where('dect_comment_user',$req->id)->delete();
      $delete  = $this->model->d_event_interest()->where('dei_creator',$req->id)->delete();
      $delete  = $this->model->d_event_interest()->where('dei_interest_user',$req->id)->delete();
      $delete  = $this->model->d_event_like()->where('del_creator',$req->id)->delete();
      $delete  = $this->model->d_event_like()->where('del_like_user',$req->id)->delete();
      // news
      $delete  = $this->model->d_news()->where('n_created_by',$req->id)->delete();
      $delete  = $this->model->d_news_comment()->where('dnc_creator',$req->id)->delete();
      $delete  = $this->model->d_news_comment()->where('dnc_comment_user',$req->id)->delete();
      $delete  = $this->model->d_news_comment_dt()->where('dnct_comment_user',$req->id)->delete();
      $delete  = $this->model->d_news_interest()->where('dni_creator',$req->id)->delete();
      $delete  = $this->model->d_news_interest()->where('dni_interest_user',$req->id)->delete();
      $delete  = $this->model->d_news_like()->where('dnl_creator',$req->id)->delete();
      $delete  = $this->model->d_news_like()->where('dnl_like_user',$req->id)->delete();
      // puisi
      $delete  = $this->model->d_puisi()->where('dp_karya',$req->id)->delete();
      // shop
      $delete  = $this->model->d_shop()->where('ds_created_by',$req->id)->delete();
      // mem
      $delete  = $this->model->m_mem()->where('m_id',$req->id)->delete();
      return Response()->json(['status'=>'sukses']);
    }
}

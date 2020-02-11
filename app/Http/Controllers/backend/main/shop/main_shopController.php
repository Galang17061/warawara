<?php

namespace App\Http\Controllers\backend\main\shop;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\Datatables\Datatables;
use App\models;
use Storage;
use Auth;
class main_shopController extends Controller
{
	protected $model;

    public function __construct()
    {
      $this->middleware('auth');
      $this->model = new models();
    } 
    public function main_shop()
    {
    	$data = $this->model->d_shop()->get();
      
      return view('backend.main.shop.main_shop',compact('data'));
    }
    public function main_shop_datatable()
    {
    	$data = $this->model->d_shop()->get();
	    $data = collect($data);
     	return Datatables::of($data)
          ->addIndexColumn()
          ->toJson();
    }
    public function main_shop_create()
    {
      $category = $this->model->m_category_shop()->get();
      return view('backend.main.shop.create_main_shop',compact('category'));
    }
    public function main_shop_save(Request $req)
    {
      // dd($req->all());
      // return basename($req->file('dsi_image')[1]);
      $id   = $this->model->d_shop()->max('ds_id')+1;
          if (count($req->file('dsi_image')) != 0) {
              for ($i=0; $i <count($req->dsi_image) ; $i++) { 
                    $photo = 'shop/image_'.$req->ds_code.'_'.$i.'.jpg';
                    $file = $req->file('dsi_image')[$i];
                    Storage::put($photo,file_get_contents($req->file('dsi_image')[$i]));
                    $simpan = $this->model->d_shop_image()->create([
                        'dsi_shop'=>$id,
                        'dsi_name'=>$photo,
                        'dsi_created_at'=>date('Y-m-d h:i:s'),
                        'dsi_created_by'=>Auth::user()->m_id,

                    ]);
              }
          }
      // if ($file != null) {
      //     $photo = 'event/image_'.$id.'.jpg';
      //     Storage::put($photo,file_get_contents($req->file('e_poster')));
      // }else{
      //     $photo = null;
      // }
      if ($req->ds_discount != null || $req->ds_discount == '') {
          $diskon_status = 'YA';
      }else{
          $diskon_status = 'TIDAK';
      }
        $simpan = $this->model->d_shop()->create([
            'ds_id'=>$id,
            'ds_code'=>$req->ds_code,
            'ds_name'=>$req->ds_name,
            'ds_price'=>$req->ds_price,
            'ds_discount'=>$req->ds_discount,
            'ds_stock_status'=>$req->ds_stock_status,
            'ds_discount_status'=>$diskon_status,
            'ds_phone'=>$req->ds_phone,
            'ds_desc_bottom'=>$req->n_content, 
            'ds_stock'=>$req->ds_stock,
            'ds_height'=>$req->ds_height,
            'ds_weight'=>$req->ds_weight,
            'ds_created_at'=>date('Y-m-d h:i:s'),
            'e_created_by'    =>Auth::user()->m_id,
        ]);
        return Response()->json(['status'=>'sukses']);
    }
    public function main_shop_edit(Request $req)
    {
      $kategori = $this->model->m_category_shop()->get();
      $data     = $this->model->d_shop()->where('n_id',$req->id)->first();
      return view('backend.main.shop.edit_main_shop',compact('kategori','data'));
    }
    public function main_shop_update(Request $req)
    {
      // dd($req->all());
      $cek_data = $this->model->d_shop()->where('n_id',$req->n_id)->first();
      $file     = $req->file('n_image');
      // return $file;
      if ($file != null) {
          $photo = 'shop/image_'.$cek_data->n_id.'.jpg';
          Storage::put($photo,file_get_contents($req->file('n_image')));
      }else{
          $photo = $cek_data->n_image;
      }
      $simpan = $this->model->d_shop()->where('n_id',$req->n_id)->update([
        'n_title'=>$req->n_title,
        'n_content'=>$req->n_content,
        'n_category'=>$req->n_category,
        'n_image'=>$photo,
        'n_created_at'=>date('Y-m-d h:i:s'),
        'n_created_by'=>Auth::user()->m_id,
      ]);
      return Response()->json(['status'=>'sukses']);
    }
    public function main_shop_delete(Request $req)
    {
      $delete  = $this->model->d_shop()->where('n_id',$req->id)->delete();
      return Response()->json(['status'=>'sukses']);
    }
}

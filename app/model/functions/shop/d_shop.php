<?php

namespace App\model\functions\shop;

use Illuminate\Database\Eloquent\Model;

class d_shop extends model
{
    protected $table = 'd_shop';
    protected $primaryKey = 'ds_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'ds_id',
                            'ds_code',
                            'ds_name',
                            'ds_price',
                            'ds_discount',
                            'ds_stock_status',
                            'ds_discount_status',
                            'ds_phone',
                            'ds_desc_top', 
                            'ds_desc_bottom', 
                            'ds_stock',
                            'ds_view',
                            'ds_height',
                            'ds_weight',
                            'ds_created_at',
                            'ds_updated_at',
                            'ds_created_by',
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    }
    public function d_shop_image()
    {
        return $this->hasMany('App\model\functions\shop\d_shop_image', 'dsi_shop', 'ds_id');
    }


}
<?php

namespace App\model\functions\shop;

use Illuminate\Database\Eloquent\Model;

class d_shop_image extends model
{
    protected $table = 'd_shop_image';
    protected $primaryKey = 'dsi_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dsi_id',
                            'dsi_shop',
                            'dsi_name',
                            'dsi_created_at',
                            'dsi_updated_at',
                            'dsi_created_by',
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    }
    public function d_shop()
    {
        return $this->belongsTo('App\model\functions\shop\d_shop', 'dsi_shop', 'ds_id');
    }


}
<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_category_shop extends model
{
    protected $table = 'm_category_shop';
    protected $primaryKey = 'cs_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'cs_id',
                            'cs_name',
                          ];

    public function d_shop(){
      return $this->hasMany('App\model\functions\shop\d_shop', 'dp_category', 'cs_id');
    }                             
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}
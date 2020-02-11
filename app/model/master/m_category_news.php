<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_category_news extends model
{
    protected $table = 'm_category_news';
    protected $primaryKey = 'cn_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'cn_id',
                            'cn_name',
                            'cn_icon',
                          ];

    public function d_news(){
      return $this->hasMany('App\model\functions\news\d_news', 'n_category', 'cn_id');
    }                             
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}
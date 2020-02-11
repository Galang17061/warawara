<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_category_event extends model
{
    protected $table = 'm_category_event';
    protected $primaryKey = 'ce_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'ce_id',
                            'ce_name',
                            'ce_icon',
                            'ce_href',
                          ];

    public function d_event(){
      return $this->hasMany('App\model\functions\event\d_event', 'e_category', 'ce_id');
    } 
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}
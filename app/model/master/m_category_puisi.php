<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_category_puisi extends model
{
    protected $table = 'm_category_puisi';
    protected $primaryKey = 'cp_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'cp_id',
                            'cp_name',
                          ];

    public function d_puisi(){
      return $this->hasMany('App\model\functions\puisi\d_puisi', 'dp_category', 'cp_id');
    }                             
    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}
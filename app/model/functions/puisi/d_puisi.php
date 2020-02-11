<?php

namespace App\model\functions\puisi;

use Illuminate\Database\Eloquent\Model;

class d_puisi extends model
{
    protected $table = 'd_puisi';
    protected $primaryKey = 'dp_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'dp_id',
                            'dp_title',
                            'dp_image',
                            'dp_karya',
                            'dp_category',
                            'dp_content',
                            'dp_view',
                            'dp_created_at',
                            'dp_updated_at',
                            'dp_created_by',
                            'dp_updated_by',
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    }
    public function m_category_puisi()
    {
        return $this->belongsTo('App\model\master\m_category_puisi', 'cp_id', 'dp_category');
    }
    public function m_mem()
    {
        return $this->belongsTo('App\m_mem', 'dp_created_by', 'm_id');
    }


}
<?php

namespace App\model\master;

use Illuminate\Database\Eloquent\Model;

class m_setting_carousel extends model
{
    protected $table = 'm_setting_carousel';
    protected $primaryKey = 'msc_id';
    public $remember_token = false;
    public $timestamps = false;
    const UPDATED_AT = 'updated_at';
    const CREATED_AT = 'created_at';
    
    protected $fillable = [
                            'msc_id',
                            'msc_title',
                            'msc_position',
                            'msc_image',
                            'msc_created_at',
                            'msc_updated_at',
                            'msc_created_by',
                            'msc_updated_by',
                          ];

    public function getDateFormat()
    {
      return 'Y-m-d H:i:s';
    } 

}
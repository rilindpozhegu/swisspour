<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;

class PageFields  extends Model
{
    protected $table = 'cms_pages_fields';

    protected $casts = [ 'model' => 'array', ];


    /**
     * Page Type Relations
     */
    public function type(){
        return $this->belongsTo(PageType::class);
    }
}

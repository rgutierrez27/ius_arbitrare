<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AreasPractice extends Model
{
    public $table = "areas";
    public $timestamps = false;
    protected $primaryKey = 'id_area';
    protected $fillable = ['id_area', 'name_area','detail_area', 'icon_area'];
  
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['site_id', 'name', 'area', 'details','disponible','vedette', 'normal_price', 'promo_price', 'image'];

    public function site()
    {
        return $this->belongsTo(Site::class);
    }
}

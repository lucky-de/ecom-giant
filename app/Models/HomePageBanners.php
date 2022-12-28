<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePageBanners extends Model
{
    use HasFactory;

     protected $table = 'home_page_banners';
         protected $fillable = ['title','subtitle','image','link'];


}

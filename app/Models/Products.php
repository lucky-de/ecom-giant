<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = ['title','image','slug','category_id','description','price','min_quantity','bulk_price','b2b_Price','status','delete_status','created_by'];
    protected $hidden = ['created_at','updated_at'];
    protected $table = 'products';
    protected $primaryKey = 'id';


    public function get_category_name(){
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public function get_user_name(){
        return $this->belongsTo(User::class, 'created_by', 'id');
    }



}


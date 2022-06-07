<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Course extends Model
{

    protected $fillable=[
        "category_id","title","featured","date_of_course","place_of_course","description"
    ];
    use HasFactory;
    public function category(){
        return $this->belongsTo(category::class,'category_id');
    }
}

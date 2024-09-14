<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarouselItem extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function carousel(){
        return $this->belongsTo(Carousel::class , 'carousel_id' , 'id');
    }

}

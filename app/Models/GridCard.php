<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GridCard extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function homepage_section(){
        return $this->belongsTo(HomepageSection::class , 'homepage_section_id' , 'id');

    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomepageSection extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function grid(){
        return $this->hasMany(GridCard::class , 'homepage_section_id' , 'id')->where('status' ,1);

    }

}

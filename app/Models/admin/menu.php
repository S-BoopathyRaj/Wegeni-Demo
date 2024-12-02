<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    use HasFactory;

    // protected $fillable = ['title', 'label', 'slug','page_title','short_description',
    // 'image','questions','list','icon_title','icon','item_icon','icon_description','item_icon_title','item_list'];

    protected $fillable = ['title', 'label', 'slug','page_title','short_description',
    'image1','image2','image3','questions','answer_description','list'];

    protected $casts =[
        'list' => 'array',         
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table ='products';
    protected $fillable =[
        'sub_category_id',
        'name',
        'url',
        'samll_description',
        'image',
        'p_highlight_heading',
        'p_highlights',
        'p_description_heading',
        'p_description',
        'p_details_heading',
        'p_details',
        'sale_tag',
        'original_price',
        'offer_price',
        'quantity',
        'priority',
        'new_arrival_products',
        'feature_products',
        'popular_products',
        'offer_products',
        'status',
        'meta_title',
        'meta_description',
        'meta_keyword'

    ];
    //for one to one relationship
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class,'sub_category_id','id');
    }

}

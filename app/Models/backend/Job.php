<?php

namespace App\Models\backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;
    protected $fillable = ['title','description','salary','vacancy','tag','image','availability','category_id','location_id','industry_id','company_id'];

    public function category():BelongsTo
    {
      return $this->belongsTo(Category::class); 
    }
    public function location():BelongsTo
    {
      return $this->belongsTo(Location::class); 
    }
    public function industry():BelongsTo
    {
      return $this->belongsTo(Industry::class); 
    }

    public function setTagAttribute($value)
    {
        $this->attributes['tag'] = json_encode($value);
    }


    public function getTagAttribute($value)
    {
        // return $this->attributes['tag'] = json_decode($value);
        return is_array($value) ? $value : json_decode($value, true);
    }
    
}

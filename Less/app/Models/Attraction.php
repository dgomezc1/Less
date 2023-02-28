<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attraction extends Model
{
    use HasFactory;

 /**
     * PRODUCT ATTRIBUTES
     * $this->attributes['id'] - int - contains the product primary key (id)
     * $this->attributes['name'] - string - contains the attraction name
     * $this->attributes['latitude'] - double - contains the attraction latitude
     * $this->attributes['longitude'] - double - contains the attraction longitude
     * $this->attributes['estimated_waiting_time'] - int - contains the estimated waiting time of line in the attraction
     * $this->attributes['capacity'] - int - contains the cappacity of the attraction
     * $this->attributes['min_age'] - int - contains the min age allowed
     * $this->attributes['max_age'] - int - contains the max age allowed
     * $this->attributes['min_height'] - int - contains the min height allowed
     * $this->attributes['max_height'] - int - contains the max height allowed
     * $this->attributes['min_weight'] - int - contains the min weight allowed
     * $this->attributes['max_weight'] - int - contains the max wieght allowed
     * $this->attributes['category'] - int - contains the category
     * $this->attributes['image_path'] - int - contains the image path
     * $this->attributes['attraction_time'] - int - contains the attraction time
    */


    protected $fillable = [
        'name', 'latitude', 'longitude', 'estimated_waiting_time', 'capacity', 'min_age', 'max_age', 'min_height', 'max_height', 'min_weight', 'max_weight', 'category', 'image_path', 'attraction_time' 
    ];

    // Getters
    public function getIdAttribute($value)
    {
        return $this->attributes['id'];
    }
    public function getNameAttribute($value)
    {
        return $this->attributes['name'];
    }
    public function getLatitudeAttribute($value)
    {
        return $this->attributes['latitude'];
    }
    public function getLongitudeAttribute($value)
    {
        return $this->attributes['longitude'];
    }
    public function getEstimatedWaitingTimeAttribute($value)
    {
        return $this->attributes['estimated_waiting_time'];
    }
    public function getCapacityAttribute($value)
    {
        return $this->attributes['capacity'];
    }
    public function getMinAgeAttribute($value)
    {
        return $this->attributes['min_age'];
    }
    public function getMaxAgeAttribute($value)
    {
        return $this->attributes['max_age'];
    }
    public function getMinHeightAttribute($value)
    {
        return $this->attributes['min_height'];
    }
    public function getMaxHeightAttribute($value)
    {
        return $this->attributes['max_height'];
    }
    public function getMinWeightAttribute($value)
    {
        return $this->attributes['min_weight'];
    }
    public function getMaxWeightAttribute($value)
    {
        return $this->attributes['max_height'];
    }
    public function getCategoryAttribute($value)
    {
        return $this->attributes['category'];
    }
    public function getImagePathAttribute($value)
    {
        return $this->attributes['image_path'];
    }
    public function getAttractionTimeAttribute($value)
    {
        return $this->attributes['attraction_time'];
    }
    // Setters
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = $value;
    }
    public function setLatitudeAttribute($value)
    {
        $this->attributes['latitude'] = $value;
    }
    public function setLongitudeAttribute($value)
    {
        $this->attributes['longitude'] = $value;
    }
    public function setEstimatedWaitingTimeAttribute($value)
    {
        $this->attributes['estimated_waiting_time'] = $value;
    }
    public function setCapacityAttribute($value)
    {
        $this->attributes['capacity'] = $value;
    }
    public function setMinAgeAttribute($value)
    {
        $this->attributes['min_age'] = $value;
    }
    public function setMaxAgeAttribute($value)
    {
        $this->attributes['max_age'] = $value;
    }
    public function setMinHeightAttribute($value)
    {
        $this->attributes['min_height'] = $value;
    }
    public function setMaxHeightAttribute($value)
    {
        $this->attributes['max_height'] = $value;
    }
    public function setMinWeightAttribute($value)
    {
        $this->attributes['min_weight'] = $value;
    }
    public function setMaxWeightAttribute($value)
    {
        $this->attributes['max_weight'] = $value;
    }
    public function setCategoryAttribute($value)
    {
        $this->attributes['category'] = $value;
    }
    public function setImagePathAttribute($value)
    {
        $this->attributes['image_path'] = $value;
    }
    public function setAttractionTimeAttribute($value)
    {
        $this->attributes['attraction_time'] = $value
    }
}

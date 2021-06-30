<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Hike extends Model
{
    static $MIN_DISTANCE = 1000;

    // override
    protected $fillable = [
        'title',
        'description'
    ];

    //override?
    protected $protected = [];

    use HasFactory;

    public function getUrl()
    {
        return route('hikes.show', [$this->id, Str::slug($this->title)]);
    }
}

// $minKmPerHike = Hike::$MIN_DISTANCE;

// $hike1 = new Hike('Local mountain');
// $hike2 = new Hike('Scotland highlands');

// $hike1->title // prop on the object instance - specific to that perticular object

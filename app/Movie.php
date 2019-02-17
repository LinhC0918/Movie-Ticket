<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['name', 'poster', 'time', 'description', 'showTime',
        'statusSeat', 'totalSeat', 'orderedSeat'];

    public function cinemas()
    {
        return $this->belongsToMany('App\Cinema');
    }
}

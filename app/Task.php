<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        'id', 'title', 'completed', "created_at"
    ];
    protected $dates = ['created_at'];

    protected $appends = ['createdHumanReadable'];

    public function getCreatedHumanReadableAttribute()
    {
        return $this->created_at->diffForHumans();
    }

    // protected $dates = [
    // 'created_at',
    // 'updated_at'
    // ];

    // protected $dateFormat = 'U';

}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Article extends Model
{
    //
    protected $fillable = [
        'title', 'content', 'ctime', 'intro', 'published_time'
    ];

    //添加属性
    public function setPublishedTimeAttribute($date)
    {
        $this->attributes['published_time'] = Carbon::createFromFormat('Y-m-d', $date); 
    }

    //拼接sql
    public function scopePublished($query)
    {
        $query->where('published_time', '<=', Carbon::now());
    }
}

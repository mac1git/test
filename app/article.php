<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class article extends Model
{
    protected $fillable = ['title', 'body', 'published_at'];
    public function user()
    {
        return $this->belongsTo('App\User');
    }
 
    // 追加
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
    public function toStringUp($value)
    {
        // 大文字に変換
        return mb_strtoupper($value);
    }
    public function toStringLow($value)
    {
        // 小文字に変換
        $this->attributes['title'] = mb_strtolower($value);

    }
     // published_at で日付ミューテータを使う
     protected $dates = ['published_at'];
     //  published scopeを定義
    public function scopePublished($query) {
        $query->where('published_at', '<=', Carbon::now());
    }
 
}

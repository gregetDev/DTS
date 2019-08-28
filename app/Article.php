<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = ['judul', 'isi', 'label', 'author', 'thumbnail'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    public $timestamps = false;

    public $primaryKey = 'nik';
    
    protected $fillable = ['nik', 'ipk', 'jk', 'alamat', 'ktp', 'dns', 'ijasah', 'status'];
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    protected $fillable = ['id_user', 'name', 'phone', 'image', 'location', 'status'];
}

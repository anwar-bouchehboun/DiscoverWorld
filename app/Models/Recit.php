<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recit extends Model
{
    use HasFactory;
    protected $fillable = [
        'paye',
        'conseils',
        'destinationID',
        'title',
       'userid'
    ];
    public function city()
    {
        return $this->belongsTo(Destination::class, 'destinationID');
    }
    public function user()
    {
        return $this->belongsTo(User::class,'userid');
    }
    public function images()
    {
        return $this->hasMany(Image::class,'id');
    }
}
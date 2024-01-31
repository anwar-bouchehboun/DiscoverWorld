<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable=[
            'recitsID',
            'image',
    ];
    
    public function recit() {
        return $this->belongsTo(Recit::class,'recitsID');
    }
}
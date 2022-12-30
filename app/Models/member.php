<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;

    protected $fillable = ['Full_Name', 'Email', 'dob', 'Phone'];
    

    public function leader(){
        return $this->belongsTo(leader::class, 'Leader_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [ 'name', 'email' ,'description', 'image', 'location', 'major_id'];

    public function major(){
        return $this->belongsTo(Major::class);
    }

    public function appointments(){
        return $this->hasMany(Appointment::class);
    }
}
